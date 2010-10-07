<?php

  /**
  * Error messages
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  // Return langs
  return array(
  
    // General
    'invalid email address' => 'Väärä sähköpostin muoto',
   
    // Company validation errors
    'company name required' => 'Yritys/organisaatio puuttuu',
    'company homepage invalid' => 'Kotisivuosoite ei kelpaa',
    
    // User validation errors
    'username value required' => 'Käyttäjätunnus puuttuu',
    'username must be unique' => 'Käyttäjätunnus on jo käytässä',
    'email value is required' => 'sähköpostiosoite puuttuu',
    'email address must be unique' => 'sähköpostiosoite on jo käytässä',
    'company value required' => 'Käyttäjän pitää olla mukana jossain yrityksessä',
    'password value required' => 'Salasana puuttuu',
    'passwords dont match' => 'Annetut salasanat eivät täsmää',
    'old password required' => 'Vanha salasana vaaditaan',
    'invalid old password' => 'Vanha salasana on väärin',
    
    // Avatar
    'invalid upload type' => 'Väärä tiedostotyyppi, sallitut tyypit ovat %s',
    'invalid upload dimensions' => 'Väärä kuvan koko. Max koko on %sx%s pikseliä',
    'invalid upload size' => 'Väärä kuvan koko. Max koko on %s',
    'invalid upload failed to move' => 'Siirretyn kuva siirto ei onnistunut',
    
    // Registration form
    'terms of services not accepted' => 'Jotta voit luoda tunnukset, sinun pitää lukea ja hyväksyä ehdot',
    
    // Init company website
    'failed to load company website' => 'Kotisivua ei voitu näyttää. Yritystä ei läytynyt',
    'failed to load project' => 'Aktiivisen projektin lataus epäonnistui',
    
    // Login form
    'username value missing' => 'Anna käyttäjätunnus',
    'password value missing' => 'Anna salasana',
    'invalid login data' => 'Kirjautuminen ei onnistunut. Tarkista tietosi ja yritä uudelleen',
    
    // Add project form
    'project name required' => 'Projektin nimi puuttuu',
    'project name unique' => 'Projektin nimen pitää olla yksilöllinen',
    
    // Add message form
    'message title required' => 'Otsikko puuttuu',
    'message title unique' => 'Otsikon pitää olla yksilöllinen tässä projektissa',
    'message text required' => 'Teksti puuttuu',
    
    // Add comment form
    'comment text required' => 'Kommentin teksti puuttuu',
    
    // Add milestone form
    'milestone name required' => 'Välitavoitteen nimi puuttuu',
    'milestone due date required' => 'Välitavoitteen valmistumispäivä puuttuu',
    
    // Add task list
    'task list name required' => 'Tehtävälistan nimi puuttuu',
    'task list name unique' => 'Tehtävälistan nimen pitää olla yksilällinen',
    
    // Add task
    'task text required' => 'Tehtävän määrittelyteksti puuttuu',
    
    // Add project form
    'form name required' => 'Lomakkeen nimi puuttuu',
    'form name unique' => 'Lomakkeen nimen pitää olla yksilällinen',
    'form success message required' => 'Onnistui-teksti puuttuu',
    'form action required' => 'Lomakkeen toiminto puuttuu',
    'project form select message' => 'Valitse viesti',
    'project form select task lists' => 'Valitse tehtävälista',
    
    // Submit project form
    'form content required' => 'Lisää sisältää tekstikenttään',
    
    // Validate project folder
    'folder name required' => 'Kansion nimi puuttuu',
    'folder name unique' => 'Kansion nimi pitää olla yksilällinen',
    
    // Validate add / edit file form
    'folder id required' => 'Valitse kansio',
    'filename required' => 'tiedostonimi puuttuu',
    
    // File revisions (internal)
    'file revision file_id required' => 'Revisio pitää olla yhteydessä tiedostoon',
    'file revision filename required' => 'Tiedostonimi puuttuu',
    'file revision type_string required' => 'Tuntematon tiedostotyyppi',
    
    // Test mail settings
    'test mail recipient required' => 'Vastaanottajan osoite vaaditaan',
    'test mail recipient invalid format' => 'Virheellinen vastaanottajan osoitteen muoto',
    'test mail message required' => 'Viesti puuttuu',
    
    // Mass mailer
    'massmailer subject required' => 'Viestin otsikko puuttuu',
    'massmailer message required' => 'Viesti puuttuu',
    'massmailer select recepients' => 'Valitse käyttäjät joille tämä sähköposti menee',
    
  ); // array

?>