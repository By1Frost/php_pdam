BEGIN
    -- Perbarui semua tagihan yang terkait dengan tarif yang diperbarui
    UPDATE tagihan t
    JOIN pelanggan p ON t.no_pelanggan = p.no_pelanggan
    SET 
        -- Hitung m3_pakai
        t.m3_pakai = GREATEST(t.m3_kini - t.m3_lalu, 0),

        -- Hitung total_tagihan_rp langsung
        t.total_tagihan_rp = 
            (LEAST(GREATEST(t.m3_pakai, 0), 10) * NEW.tarif_0_10_m3) +
            (LEAST(GREATEST(t.m3_pakai - 10, 0), 10) * NEW.tarif_11_20_m3) +
            (LEAST(GREATEST(t.m3_pakai - 20, 0), 10) * NEW.tarif_21_30_m3) +
            (GREATEST(t.m3_pakai - 30, 0) * NEW.tarif_31_dst_m3)
    WHERE p.id_gol = NEW.id_gol;
END