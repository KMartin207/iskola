-- A feladatok megoldására elkészített SQL parancsokat illessze be a feladat sorszáma után!


-- 10. feladat:

CREATE DATABASE halozat
	DEFAULT CHARACTER SET utf8
    	DEFAULT COLLATE utf8_hungarian_ci;

-- 12. feladat:

INSERT INTO megallok
	VALUES (198, 'Kőbányai garázs');

-- 13. feladat:

UPDATE jaratok
	SET elsoAjtos = 0
    	WHERE id = 20;

-- 14. feladat:

SELECT jaratSzam
	FROM jaratok
    WHERE elsoAjtos = 1;

-- 15. feladat:

SELECT nev
	FROM megallok
    WHERE nev LIKE "%sétány"
    ORDER BY nev;

-- 16. feladat:

SELECT sorszam, nev as "megallo"
	FROM halozat 
    	INNER JOIN megallok ON halozat.megallo = megallok.id
        INNER JOIN jaratok ON halozat.jarat = jaratok.id
        WHERE jaratSzam = "CITY" AND irany = "A"
        ORDER BY sorszam ASC;



-- 17. feladat:

SELECT megallok.nev AS "megallo", COUNT(*) AS "jaratokSzama"
	FROM halozat
    	INNER JOIN megallok ON halozat.megallo = megallok.id
        GROUP BY nev
        HAVING COUNT(*) > 2;
        
    

