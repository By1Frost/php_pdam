BEGIN
    DECLARE variabel1 INT DEFAULT 0;
    DECLARE variabel2 INT DEFAULT 0;
    DECLARE variabel3 INT DEFAULT 0;
    DECLARE variabel4 INT DEFAULT 0;
    DECLARE tarif0_10 INT;
    DECLARE tarif11_20 INT;
    DECLARE tarif21_30 INT;
    DECLARE tarif31_plus INT;
    DECLARE m3_pakai INT;

    -- Hitung m3_pakai
    SET m3_pakai = GREATEST(NEW.m3_kini - NEW.m3_lalu, 0);

    -- Ambil tarif dari tabel tarif berdasarkan id_gol (melalui no_pelanggan)
    SELECT t.tarif_0_10_m3, t.tarif_11_20_m3, t.tarif_21_30_m3, t.tarif_31_dst_m3
    INTO tarif0_10, tarif11_20, tarif21_30, tarif31_plus
    FROM pelanggan p
    JOIN tarif t ON p.id_gol = t.id_gol
    WHERE p.no_pelanggan = NEW.no_pelanggan;

    -- Bagi m3_pakai ke dalam variabel
    IF m3_pakai <= 10 THEN
        SET variabel1 = m3_pakai;
    ELSEIF m3_pakai <= 20 THEN
        SET variabel1 = 10;
        SET variabel2 = m3_pakai - 10;
    ELSEIF m3_pakai <= 30 THEN
        SET variabel1 = 10;
        SET variabel2 = 10;
        SET variabel3 = m3_pakai - 20;
    ELSE
        SET variabel1 = 10;
        SET variabel2 = 10;
        SET variabel3 = 10;
        SET variabel4 = m3_pakai - 30;
    END IF;

    -- Hitung total_tagihan_rp
    SET NEW.m3_pakai = m3_pakai;
    SET NEW.total_tagihan_rp = 
        (variabel1 * tarif0_10) +
        (variabel2 * tarif11_20) +
        (variabel3 * tarif21_30) +
        (variabel4 * tarif31_plus);
END