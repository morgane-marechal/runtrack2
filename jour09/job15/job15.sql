select salles.nom, etage.nom
    from salles
    join etage  on etage.id = salles.id_etage;

