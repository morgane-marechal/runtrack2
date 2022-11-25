select salles.nom, max(salles.capacite), etage.nom
    from salles
    join etage  on etage.id = salles.id_etage;

SET @maxi = ( SELECT MAX(capacite) FROM salles );

UPDATE salles
SET nom = 'Big Room' where salles.capacite = @maxi;

