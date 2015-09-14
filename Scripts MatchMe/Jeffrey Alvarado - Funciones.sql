-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRARACTIVIDADAL
( pNombre IN VARCHAR2
) AS
BEGIN
	INSERT INTO actividadAL(id_actividadAL, nombre)
	VALUES(secu_actividadAL.NextVal, pNombre);
--NULL;
END REGISTRARACTIVIDADAL;

CREATE OR REPLACE PROCEDURE EDITARACTIVIDADAL
( pID_ActividadAL IN NUMBER, pNombre IN VARCHAR2
) AS
BEGIN
	Update actividadAL
	set nombre := pNombre
	WHERE id_actividadAL = pID_ActividadAL;
--NULL;
END EDITARACTIVIDADAL;

CREATE OR REPLACE PROCEDURE BORRARACTIVIDADAL
( pID_ActividadAL IN NUMBER
) AS
BEGIN
	delete from actividadAL
	WHERE id_actividadAL = pID_ActividadAL;
--NULL;
END BORRARACTIVIDADAL;

--Prueba



----------------------------------------------------

-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRARPAIS
( pNombre IN VARCHAR2
) AS
BEGIN
	INSERT INTO pais(id_pais, nombre)
	VALUES(secu_pais.NextVal, pNombre);
--NULL;
END REGISTRARPAIS;

CREATE OR REPLACE PROCEDURE EDITARPAIS
( pID_pais IN NUMBER, pNombre IN VARCHAR2
) AS
BEGIN
	Update pais
	set nombre := pNombre
	WHERE id_pais = pID_pais;
--NULL;
END EDITARPAIS;

CREATE OR REPLACE PROCEDURE BORRARPAIS
( pID_pais IN NUMBER
) AS
BEGIN
	delete from pais
	WHERE id_pais = pID_pais;
--NULL;
END BORRARPAIS;

--Prueba



----------------------------------------------------

-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRAROCUPACION
( pNombre IN VARCHAR2
) AS
BEGIN
	INSERT INTO ocupacion(id_ocupacion, nombre)
	VALUES(secu_ocupacion.NextVal, pNombre);
--NULL;
END REGISTRAROCUPACION;

CREATE OR REPLACE PROCEDURE EDITAROCUPACION
( pID_ocupacion IN NUMBER, pNombre IN VARCHAR2
) AS
BEGIN
	Update ocupacion
	set nombre := pNombre
	WHERE id_ocupacion = pID_ocupacion;
END EDITAROCUPACION;

CREATE OR REPLACE PROCEDURE BORRAROCUPACION
( pID_ocupacion IN NUMBER
) AS
BEGIN
	delete from ocupacion
	WHERE id_ocupacion = pID_ocupacion;
--NULL;
END BORRAROCUPACION;

--Prueba



----------------------------------------------------

-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRAREVENTO
( pNombre IN VARCHAR2, pDescripcion IN VARCHAR2, pFecha IN VARCHAR2, pId_Ciudad IN NUMBER
) AS
BEGIN
	INSERT INTO evento(id_evento, nombre, descripcion, fecha, id_cuidad)
	VALUES(secu_evento.NextVal, pNombre, pDescripcion, TO_DATE(pFecha, 'DDMMYYYY hh24:mi:ss'), pId_Ciudad);
--NULL;
END REGISTRAREVENTO;

CREATE OR REPLACE PROCEDURE EDITAREVENTO
( pID_evento IN NUMBER, pNombre IN VARCHAR2, pDescripcion IN VARCHAR2, pFecha IN VARCHAR2, pId_Ciudad IN NUMBER
) AS
BEGIN
	Update evento
	set nombre := pNombre,
		descripcion := pDescripcion,
		fecha := TO_DATE(pFecha, 'DDMMYYYY hh24:mi:ss')
		id_cuidad := pId_Ciudad
	WHERE id_evento = pID_evento;
END EDITAREVENTO;

CREATE OR REPLACE PROCEDURE BORRAREVENTO
( pID_evento IN NUMBER
) AS
BEGIN
	delete from evento
	WHERE id_evento = pID_evento;
--NULL;
END BORRAREVENTO;

--Prueba



----------------------------------------------------

-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRARCOLORPIEL
( pNombre IN VARCHAR2
) AS
BEGIN
	INSERT INTO color_piel(id_colorpiel, nombre)
	VALUES(secu_color_piel.NextVal, pNombre);
--NULL;
END REGISTRARCOLORPIEL;

CREATE OR REPLACE PROCEDURE EDITARCOLORPIEL
( pid_colorpiel IN NUMBER, pNombre IN VARCHAR2
) AS
BEGIN
	Update color_piel
	set nombre := pNombre
	WHERE id_colorpiel = pid_colorpiel;
--NULL;
END EDITARCOLORPIEL;

CREATE OR REPLACE PROCEDURE BORRARCOLORPIEL
( pid_colorpiel IN NUMBER
) AS
BEGIN
	delete from color_piel
	WHERE id_colorpiel = pid_colorpiel;
--NULL;
END BORRARCOLORPIEL;

--Prueba



----------------------------------------------------

-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRARESTADOMATCH
( pNombre IN VARCHAR2
) AS
BEGIN
	INSERT INTO estado_match(id_estado_match, nombre)
	VALUES(secu_estado_match.NextVal, pNombre);
--NULL;
END REGISTRARESTADOMATCH;

CREATE OR REPLACE PROCEDURE EDITARESTADOMATCH
( pid_estado_match IN NUMBER, pNombre IN VARCHAR2
) AS
BEGIN
	Update estado_match
	set nombre := pNombre
	WHERE id_estado_match = pid_estado_match;
--NULL;
END EDITARESTADOMATCH;

CREATE OR REPLACE PROCEDURE BORRARESTADOMATCH
( pid_estado_match IN NUMBER
) AS
BEGIN
	delete from estado_match
	WHERE id_estado_match = pid_estado_match;
--NULL;
END BORRARESTADOMATCH;

--Prueba



----------------------------------------------------

-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRARINTERES
( pRango_edadi IN NUMBER, pRango_edadf IN NUMBER, pId_tipopareja IN NUMBER
) AS
BEGIN
	INSERT INTO interes_gusto(id_interesg, rango_edadi, rango_edadf, id_tipopareja)
	VALUES(secu_interes_gusto.NextVal, pRango_edadi, pRango_edadf, pId_tipopareja);
--NULL;
END REGISTRARINTERES;

CREATE OR REPLACE PROCEDURE EDITARINTERES
( pid_interesg IN NUMBER, pRango_edadi IN NUMBER, pRango_edadf IN NUMBER, pId_tipopareja IN NUMBER
) AS
BEGIN
Update interes_gusto
	set rango_edadi := pRango_edadi,
		rango_edadf := pRango_edadf,
		id_tipopareja := pId_tipopareja
	WHERE id_interesg = pid_interesg;
--NULL;
END EDITARINTERES;

CREATE OR REPLACE PROCEDURE BORRARINTERES
( pid_interesg IN NUMBER
) AS
BEGIN
	delete from interes_gusto
	WHERE id_interesg = pid_interesg;
--NULL;
END BORRARINTERES;

--Prueba



----------------------------------------------------

-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRARMATCH
( pFecha IN VARCHAR2, pId_estado_match IN NUMBER, pId_propio IN NUMBER, pId_recomendacion IN NUMBER
) AS
BEGIN
	INSERT INTO match(id_match, fecha, id_estado_match, id_propio, id_recomendacion)
	VALUES(secu_match.NextVal, TO_DATE(pFecha, 'DDMMYYYY'), pId_estado_match, pId_propio, pId_recomendacion);
--NULL;
END REGISTRARMATCH;

CREATE OR REPLACE PROCEDURE EDITARMATCH
( pid_match IN NUMBER, pFecha IN VARCHAR2, pId_estado_match IN NUMBER, pId_propio IN NUMBER, pId_recomendacion IN NUMBER
) AS
BEGIN
	Update match
	set fecha := TO_DATE(pFecha, 'DDMMYYYY'),
		id_estado_match := pId_estado_match,
		id_propio := pId_propio,
		id_recomendacion := pId_recomendacion
	WHERE id_match = pid_match;
--NULL;
END EDITARMATCH;

CREATE OR REPLACE PROCEDURE BORRARMATCH
( pid_match IN NUMBER
) AS
BEGIN
	delete from match
	WHERE id_match = pid_match;
--NULL;
END BORRARMATCH;

--Prueba



----------------------------------------------------

-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRARUSUARIOXIDIOMA
( pId_usuario IN NUMBER, pId_idioma IN NUMBER
) AS
BEGIN
	INSERT INTO UsuarioXIdioma(ID_UsuarioXIdioma, id_usuario, id_idioma)
	VALUES(secu_UsuarioXIdioma.NextVal, pId_usuario, pId_idioma);
--NULL;
END REGISTRARUSUARIOXIDIOMA;

CREATE OR REPLACE PROCEDURE EDITARUSUARIOXIDIOMA
( pId_UsuarioXIdioma IN NUMBER, pId_usuario IN NUMBER, pId_idioma IN NUMBER
) AS
BEGIN
	Update UsuarioXIdioma
	set id_idioma := pId_idioma,
		id_usuario := pId_usuario
	WHERE ID_UsuarioXIdioma = pId_UsuarioXIdioma;
--NULL;
END EDITARUSUARIOXIDIOMA;

CREATE OR REPLACE PROCEDURE BORRARUSUARIOXIDIOMA
( pId_UsuarioXIdioma IN NUMBER
) AS
BEGIN
	delete from UsuarioXIdioma
	WHERE ID_UsuarioXIdioma = pId_UsuarioXIdioma;
--NULL;
END BORRARUSUARIOXIDIOMA;

--Prueba



----------------------------------------------------

-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRARUSUARIOXOCUPACION
( pId_usuario IN NUMBER, pId_ocupacion IN NUMBER
) AS
BEGIN
	INSERT INTO UsuarioXOcupacion(ID_UsuarioXOcupacion, id_usuario, id_ocupacion)
	VALUES(secu_UsuarioXOcupacion.NextVal, pId_usuario, pId_ocupacion);
--NULL;
END REGISTRARUSUARIOXOCUPACION;

CREATE OR REPLACE PROCEDURE EDITARUSUARIOXOCUPACION
( pID_UsuarioXOcupacion IN NUMBER, pId_usuario IN NUMBER, pId_ocupacion IN NUMBER
) AS
BEGIN
	Update UsuarioXOcupacion
	set id_ocupacion := pId_ocupacion,
		id_usuario := pId_usuario
	WHERE ID_UsuarioXOcupacion = pID_UsuarioXOcupacion;
--NULL;
END EDITARUSUARIOXOCUPACION;

CREATE OR REPLACE PROCEDURE BORRARUSUARIOXOCUPACION
( pID_UsuarioXOcupacion IN NUMBER
) AS
BEGIN
	delete from UsuarioXOcupacion
	WHERE ID_UsuarioXOcupacion = pID_UsuarioXOcupacion;
--NULL;
END BORRARUSUARIOXOCUPACION;

--Prueba



----------------------------------------------------

-- Funciones

CREATE OR REPLACE PROCEDURE REGISTRARUSUARIO
( pNombre IN VARCHAR2, 
	pPrimer_apellido IN VARCHAR2, 
	pSegundo_apellido IN VARCHAR2, 
	pFecha_nac IN VARCHAR2, 
	pEmail IN VARCHAR2, 
	pFoto IN VARCHAR2, 
	pGenero IN NUMBER, 
	pClave IN VARCHAR2, 
	pGustan_mascota IN VARCHAR2, 
	pTiene_mascota IN VARCHAR2, 
	pTendria_mascota IN VARCHAR2, 
	pid_religion IN NUMBER, 
	pid_estadoCi IN NUMBER, 
	pid_educacion IN NUMBER, 
	pid_cuidad IN NUMBER, 
	pid_aspectoFi IN NUMBER, 
	pid_hobby IN NUMBER, 
	pid_actividadAL IN NUMBER, 
	pid_estilovida IN NUMBER, 
	pid_ocupacion IN NUMBER, 
	pid_rol IN NUMBER, 
	pid_signo_zodiacal IN NUMBER
) AS
BEGIN
	INSERT INTO Usuario(ID_Usuario, 
					nombre, 
					primer_apellido, 
					segundo_apellido, 
					fecha_nac, 
					email, 
					foto, 
					genero, 
					clave, 
					gustan_mascota, 
					tiene_mascota, 
					tendria_mascota, 
					id_religion, 
					id_estadoCi, 
					id_educacion, 
					id_cuidad, 
					id_aspectoFi, 
					id_hobby, 
					id_actividadAL, 
					id_estilovida, 
					id_ocupacion, 
					id_rol, 
					id_signo_zodiacal)
	VALUES(secu_Usuario.NextVal, 
		   pNombre, 
		   pPrimer_apellido, 
		   pSegundo_apellido, 
		   TO_DATE(pFecha_nac, 'DDMMYYYY'), 
		   pEmail, 
		   pFoto,
		   pGenero,  
		   pClave, 
		   pGustan_mascota, 
		   pTiene_mascota, 
		   pTendria_mascota, 
		   pid_religion, 
		   pid_estadoCi, 
		   pid_educacion, 
		   pid_cuidad, 
		   pid_aspectoFi, 
		   pid_hobby, 
		   pid_actividadAL, 
		   pid_estilovida, 
		   pid_ocupacion, 
		   pid_rol, 
		   pid_signo_zodiacal);
--NULL;
END REGISTRARUSUARIO;

CREATE OR REPLACE PROCEDURE EDITARUSUARIO
( pID_Usuario IN NUMBER,
	pNombre IN VARCHAR2, 
	pPrimer_apellido IN VARCHAR2, 
	pSegundo_apellido IN VARCHAR2, 
	pFecha_nac IN VARCHAR2, 
	pEmail IN VARCHAR2, 
	pFoto IN VARCHAR2, 
	pGenero IN NUMBER, 
	pClave IN VARCHAR2, 
	pGustan_mascota IN VARCHAR2, 
	pTiene_mascota IN VARCHAR2, 
	pTendria_mascota IN VARCHAR2, 
	pid_religion IN NUMBER, 
	pid_estadoCi IN NUMBER, 
	pid_educacion IN NUMBER, 
	pid_cuidad IN NUMBER, 
	pid_aspectoFi IN NUMBER, 
	pid_hobby IN NUMBER, 
	pid_actividadAL IN NUMBER, 
	pid_estilovida IN NUMBER, 
	pid_ocupacion IN NUMBER, 
	pid_rol IN NUMBER, 
	pid_signo_zodiacal IN NUMBER
) AS
BEGIN
	Update Usuario
	set nombre := pNombre, 
	   primer_apellido := pPrimer_apellido, 
	   segundo_apellido := pSegundo_apellido, 
	   fecha_nac := TO_DATE(pFecha_nac, 'DDMMYYYY'), 
	   email := pEmail, 
	   foto := pFoto,
	   genero := pGenero,  
	   clave := pClave, 
	   gustan_mascota := pGustan_mascota, 
	   tiene_mascota := pTiene_mascota, 
	   tendria_mascota := pTendria_mascota, 
	   id_religion := pid_religion, 
	   id_estadoCi := pid_estadoCi, 
	   id_educacion := pid_educacion, 
	   id_cuidad := pid_cuidad, 
	   id_aspectoFi := pid_aspectoFi, 
	   id_hobby := pid_hobby, 
	   id_actividadAL := pid_actividadAL, 
	   id_estilovida := pid_estilovida, 
	   id_ocupacion := pid_ocupacion, 
	   id_rol := pid_rol, 
	   id_signo_zodiacal := pid_signo_zodiacal
	WHERE ID_Usuario = pID_Usuario;
--NULL;
END EDITARUSUARIO;

CREATE OR REPLACE PROCEDURE BORRARUSUARIO
( pID_Usuario IN NUMBER
) AS
BEGIN
	delete from Usuario
	WHERE ID_Usuario = pID_Usuario;
--NULL;
END BORRARUSUARIO;

--Prueba



----------------------------------------------------