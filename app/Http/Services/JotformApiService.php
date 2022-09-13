<?php 

namespace App\Http\Services;

use App\Http\Controllers\JotForm;

class JotformApiService{

    public static function getApi(){
        $api = new JotForm(env('JOTFORM_API'));
        return $api;
    }

    public static function getSubmissions($formId){
        $api = JotformApiService::getApi();
        return $api->getFormSubmissions($formId);
    }

    public static function getSubmissionSingle($submissionId){
        $api = JotformApiService::getApi();
        return $api->getSubmission($submissionId);
    }

    public static function addSubmission($formId,$submission){
        $api = JotformApiService::getApi();
        return $api->createFormSubmission($formId,$submission);
    }
    public static function deleteSubmission($submissionId){
        $api = JotformApiService::getApi();
        return $api->deleteSubmission($submissionId);
    }
    public static function editSubmission($submissionId,$submission){
        $api = JotformApiService::getApi();
        return $api->editSubmission($submissionId,$submission);
    }
    public static function cloneForm($formID){
        $api = JotformApiService::getApi();
        return $api->cloneForm($formID);
    }
}



?>