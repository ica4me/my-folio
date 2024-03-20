<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\CertificateResource;
use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Profile;
use App\Models\Education;
use App\Models\Aboutme;
use App\Models\Mytitle;
use App\Models\Skill;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContact extends EditRecord
{
    protected static string $resource = ContactResource::class;

    protected function getActions(): array
    {
        return [
           // Actions\DeleteAction::make(),
        ];
    }

    public function show() {
        $contact = Contact::find(1);
        $project = Project::all(); // Mengambil semua data project
        $certificate = Certificate::all();
        $profile = Profile::find(1);;
        $education = Education::all();        
        $aboutme = Aboutme::find(1);
        $mytitle = Mytitle::all();
        $frontendSkills = Skill::where('category', 'Frontend')->get();
        $backendSkills = Skill::where('category', 'Backend')->get();
        $databaseSkills = Skill::where('category', 'Database')->get();

        // Mengirim data ke view
         return view('welcome', compact(
            'contact',
            'project',
            'certificate',
            'profile',
            'education',
            'aboutme',
            'mytitle',
            'frontendSkills',
            'backendSkills',
            'databaseSkills'));
       
    }


     //redirect ke halaman index setelah membuat data
     protected function getRedirectUrl(): string
     {
        return $this->getResource()::getUrl('index'); 
     }



}
