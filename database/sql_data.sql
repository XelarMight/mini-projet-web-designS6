
CREATE SEQUENCE t_statistiques_local_idstatistiqueslocal_seq;

CREATE TABLE t_statistiques_local (
                idStatistiquesLocal INTEGER NOT NULL DEFAULT nextval('t_statistiques_local_idstatistiqueslocal_seq'),
                region VARCHAR(30) NOT NULL,
                nombreDeCas INTEGER NOT NULL,
                dates DATE NOT NULL,
                CONSTRAINT t_statistiques_local_pk_id PRIMARY KEY (idStatistiquesLocal)
);


ALTER SEQUENCE t_statistiques_local_idstatistiqueslocal_seq OWNED BY t_statistiques_local.idStatistiquesLocal;

CREATE SEQUENCE t_contenu_idcontenu_seq;

CREATE TABLE t_contenu (
                idContenu INTEGER NOT NULL DEFAULT nextval('t_contenu_idcontenu_seq'),
                titre VARCHAR(20) NOT NULL,
                description VARCHAR(100) NOT NULL,
                texte TEXT NOT NULL,
                dates DATE NOT NULL,
                CONSTRAINT t_contenu_pk_id PRIMARY KEY (idContenu)
);


ALTER SEQUENCE t_contenu_idcontenu_seq OWNED BY t_contenu.idContenu;

CREATE SEQUENCE t_global_statistiques_idstatistiquesglobal_seq;

CREATE TABLE t_global_statistiques (
                idStatistiquesGlobal INTEGER NOT NULL DEFAULT nextval('t_global_statistiques_idstatistiquesglobal_seq'),
                continent VARCHAR(30) NOT NULL,
                nombreDeCas INTEGER NOT NULL,
                dates DATE NOT NULL,
                CONSTRAINT t_global_statistiques_pk_id PRIMARY KEY (idStatistiquesGlobal)
);


ALTER SEQUENCE t_global_statistiques_idstatistiquesglobal_seq OWNED BY t_global_statistiques.idStatistiquesGlobal;

CREATE SEQUENCE t_utilisateur_idutilisateur_seq;

CREATE TABLE t_utilisateur (
                idUtilisateur INTEGER NOT NULL DEFAULT nextval('t_utilisateur_idutilisateur_seq'),
                nomUtilisateur VARCHAR(250) NOT NULL,
                sexe VARCHAR(10) NOT NULL,
                motdepasse VARCHAR(250) NOT NULL,
                dateNaissance DATE NOT NULL,
                CONSTRAINT t_user_pk_id PRIMARY KEY (idUtilisateur)
);


ALTER SEQUENCE t_utilisateur_idutilisateur_seq OWNED BY t_utilisateur.idUtilisateur;

CREATE SEQUENCE t_commentaire_idcommentaire_seq;

CREATE TABLE t_commentaire (
                idCommentaire INTEGER NOT NULL DEFAULT nextval('t_commentaire_idcommentaire_seq'),
                idUtilisateur INTEGER NOT NULL,
                texte TEXT NOT NULL,
                dates DATE NOT NULL,
                CONSTRAINT t_commentaire_pk_id PRIMARY KEY (idCommentaire)
);


ALTER SEQUENCE t_commentaire_idcommentaire_seq OWNED BY t_commentaire.idCommentaire;

CREATE SEQUENCE t_admin_idadmin_seq;

CREATE TABLE t_admin (
                idAdmin INTEGER NOT NULL DEFAULT nextval('t_admin_idadmin_seq'),
                nomAdmin VARCHAR(250) NOT NULL,
                sexe VARCHAR(10) NOT NULL,
                motdepasse VARCHAR(250) NOT NULL,
                dateNaissance DATE NOT NULL,
                CONSTRAINT t_admin_pk_id PRIMARY KEY (idAdmin)
);


ALTER SEQUENCE t_admin_idadmin_seq OWNED BY t_admin.idAdmin;

ALTER TABLE t_commentaire ADD CONSTRAINT t_utilisateur_t_commentaire_fk
FOREIGN KEY (idUtilisateur)
REFERENCES t_utilisateur (idUtilisateur)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

----------------------------------------

insert into t_admin values(nextval('t_admin_idadmin_seq'), 'John', 'homme', 'azer123456', '1999-12-16');

insert into t_global_statistiques values(nextval('t_global_statistiques_idstatistiquesglobal_seq'), 'Europe', 44933850, '2021-04-08');
insert into t_global_statistiques values(nextval('t_global_statistiques_idstatistiquesglobal_seq'), 'Afrique', 4574042, '2021-02-05');
insert into t_global_statistiques values(nextval('t_global_statistiques_idstatistiquesglobal_seq'), 'Amerique', 37237560, '2021-02-05');
insert into t_global_statistiques values(nextval('t_global_statistiques_idstatistiquesglobal_seq'), 'Asie', 425000, '2021-02-05');
