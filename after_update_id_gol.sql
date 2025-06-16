BEGIN
    -- Deklarasi variabel lokal
    DECLARE m3_lalu INT DEFAULT 0;
    DECLARE m3_kini INT DEFAULT 0;
    DECLARE m3_pakai INT DEFAULT 0;
    DECLARE tarif0 INT DEFAULT 0;
    DECLARE tarif1 INT DEFAULT 0;
    DECLARE tarif2 INT DEFAULT 0;
    DECLARE tarif3 INT DEFAULT 0;
    DECLARE total_tagihan INT DEFAULT 0;

    -- Ambil data m3_lalu dan m3_kini dari tabel tagihan (dengan LIMIT 1)
    SELECT m3_lalu, m3_kini 
    INTO m3_lalu, m3_kini
    FROM tagihan
    WHERE no_pelanggan = NEW.no_pelanggan
    ORDER BY id_tagihan DESC -- Ambil baris terakhir jika ada duplikasi
    LIMIT 1;

    -- Hitung m3_pakai
    SET m3_pakai = GREATEST(0, m3_kini - m3_lalu);

    -- Ambil tarif berdasarkan id_gol yang baru (dengan LIMIT 1)
    SELECT tarif_0_10_m3, tarif_11_20_m3, tarif_21_30_m3, tarif_31_dst_m3
    INTO tarif0, tarif1, tarif2, tarif3
    FROM tarif
    WHERE id_gol = NEW.id_gol
    LIMIT 1;

    -- Hitung total_tagihan_rp berdasarkan m3_pakai
    SET total_tagihan = 
        (LEAST(10, m3_pakai) * tarif0) +
        (LEAST(10, GREATEST(0, m3_pakai - 10)) * tarif1) +
        (LEAST(10, GREATEST(0, m3_pakai - 20)) * tarif2) +
        (GREATEST(0, m3_pakai - 30) * tarif3);

    -- Update nilai m3_pakai dan total_tagihan_rp di tabel tagihan
    UPDATE tagihan
    SET m3_pakai = m3_pakai,
        total_tagihan_rp = total_tagihan
    WHERE no_pelanggan = NEW.no_pelanggan;
END