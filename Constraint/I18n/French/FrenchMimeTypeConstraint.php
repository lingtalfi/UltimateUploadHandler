<?php


namespace UltimateUploadHandler\Constraint\I18n\French;


use UltimateUploadHandler\Constraint\MimeTypeConstraint;

class FrenchMimeTypeConstraint extends MimeTypeConstraint
{


    public function __construct()
    {
        parent::__construct();
        $this->messages["invalid_mime"] = "Le type mime du fichier est invalide ({{mimeType}}). Les types mime autorisés sont {{allowedMimeTypes}}";
    }
}