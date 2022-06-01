function traduccionPerfil(page) {
   
   if(page == '1'){
      translationIt(mainLanguage, "txtTopTitle", "h1", "trad_datos_personales");

      translationIt(mainLanguage, "nameLabel", "label", "trad_help_primeranombre");
         setReqAsterisk("nameLabel", "label");
      translationIt(mainLanguage, "segundo_nombreLabel", "label", "trad_help_segundonombre");
      translationIt(mainLanguage, "apellidoLabel", "label", "trad_help_primerapell");
         setReqAsterisk("apellidoLabel", "label");
      translationIt(mainLanguage, "segundo_apellidoLabel", "label", "trad_help_segundoapell");
   }
   if(page == '2'){
      translationIt(mainLanguage, "txtTopTitle", "h1", "trad_datos_personales");

      translationIt(mainLanguage, "birthDate0", "label", "trad_fecha_nacimiento");
         setReqAsterisk("birthDate0", "label");
      translationIt(mainLanguage, "generoLabel", "labelSelect", "trad_genero");
         setReqAsterisk("generoLabel", "labelSelect");
      translationIt(mainLanguage, "estadoCivilLabel", "labelSelect", "trad_estado_civil");
         setReqAsterisk("estadoCivilLabel", "labelSelect");
      translationIt(mainLanguage, "ProfesionLabel", "labelSelect", "trad_ocupacion");
         setReqAsterisk("ProfesionLabel", "labelSelect");
   }
   if(page == '3'){
      translationIt(mainLanguage, "txtTopTitle", "h1", "trad_direccion_nacionalidad");

      translationIt(mainLanguage, "DireccionLabel", "label", "trad_direccion");
         setReqAsterisk("DireccionLabel", "label");
      translationIt(mainLanguage, "stateLabel", "labelSelect", "trad_estado");
         setReqAsterisk("stateLabel", "labelSelect");
      translationIt(mainLanguage, "cityLabel", "labelSelect", "trad_ciudad");
         setReqAsterisk("cityLabel", "labelSelect");
      translationIt(mainLanguage, "postalLabel", "label", "trad_codigo_zip");
         setReqAsterisk("postalLabel", "label");
   }
   if(page == '4'){
      translationIt(mainLanguage, "txtTopTitle", "h1", "trad_direccion_nacionalidad");

      translationIt(mainLanguage, "paisNacimientoLabel", "labelSelect", "trad_pais_de_nacimiento");
         setReqAsterisk("paisNacimientoLabel", "labelSelect");
      translationIt(mainLanguage, "nacionalidadLabel", "labelSelect", "trad_nacionalidad");
         setReqAsterisk("nacionalidadLabel", "labelSelect");
      translationIt(mainLanguage, "servicioDemostradoLabel","labelSelect","trad_seleccionar_documento_adjuntar");
   }
   if(page == '5'){
      translationIt(mainLanguage, "txtTopTitle", "h1", "trad_documento_identidad");

      translationIt(mainLanguage, "documentTypeLabel", "labelSelect", "trad_tipo_documento");
         setReqAsterisk("documentTypeLabel", "labelSelect");
      translationIt(mainLanguage, "docIdentidadLabel", "label", "trad_documento_de_identidad");
         setReqAsterisk("docIdentidadLabel", "label");
      translationIt(mainLanguage, "dateDocumentLabel", "label", "trad_fecha_venc");
         setReqAsterisk("dateDocumentLabel", "label");
      translationIt(mainLanguage, "emissionDateLabel", "label", "trad_fecha_emision");
         setReqAsterisk("emissionDateLabel", "label");
      translationIt(mainLanguage, "issuancePlaceLabel", "label", "trad_issuance_place");
         setReqAsterisk("issuancePlaceLabel", "label");
   }
   if(page == '6'){
      translationIt(mainLanguage, "profileImage", "p", "trad_profile_image");
      translationIt(mainLanguage, "txtTopTitle", "h1", "trad_datos_registro");

      translationIt(mainLanguage, "aliasLabel", "label", "trad_alias");
      translationIt(mainLanguage, "telfLabel", "label", "trad_telefono");
      translationIt(mainLanguage, "emailLabel", "label", "trad_email");
   }

}
