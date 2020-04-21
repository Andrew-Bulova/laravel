<?php


namespace App\Services;


use App\Contractor;

class ContractorService
{
    public function contractorUpdate($request, $id)
    {
        $contractor = Contractor::findOrFail($id);
        $contractor->name = $request->get('name');
        $contractor->phone = $request->get('phone');
        if (isset($request['photo'])) {
            $photoPATH = $request->file('photo')->store('images', 'public');
            $contractor->photo = '/storage/' . $photoPATH;
        };
        $contractor->legal_address = $request->get('legal_address');
        $contractor->actual_address = $request->get('actual_address');
        $contractor->registration_date = $request->get('registration_date');
        $contractor->tin = $request->get('tin');
        if (isset($request['mes_license_photo'])) {
            $mesLicensePhotoPATH = $request->file('mes_license_photo')->store('images', 'public');
            $contractor->mes_license_photo = '/storage/' . $mesLicensePhotoPATH;
        }
        $contractor->mes_license_number = $request->get('mes_license_number');
        $contractor->mes_license_date = $request->get('mes_license_date');
        if (isset($request['mes_license_photo'])) {
            $iraAccreditationPhotoPATH = $request->file('ira_accreditation_photo')->store('images', 'public');
            $contractor->ira_accreditation_photo = '/storage/' . $iraAccreditationPhotoPATH;
        }
        $contractor->ira_accreditation_number = $request->get('ira_accreditation_number');
        $contractor->ira_accreditation_date = $request->get('ira_accreditation_date');
        if (isset($request['mes_license_photo'])) {
            $electricLaboratoryLicensePhotoPATH =
                $request->file('electric_laboratory_license_photo')->store('images', 'public');
            $contractor->electric_laboratory_license_photo = '/storage/' . $electricLaboratoryLicensePhotoPATH;
        }
        $contractor->electric_laboratory_license_number = $request->get('electric_laboratory_license_number');
        $contractor->electric_laboratory_license_date = $request->get('electric_laboratory_license_date');
        if (isset($request['mes_license_photo'])) {
            $educationalLicensePhotoPATH = $request->file('educational_license_photo')->store('images', 'public');
            $contractor->educational_license_photo = '/storage/' . $educationalLicensePhotoPATH;
        }
        $contractor->educational_license_number = $request->get('educational_license_number');
        $contractor->educational_license_date = $request->get('educational_license_date');
        $contractor->information = $request->get('information');
        $contractor->save();
    }
}
