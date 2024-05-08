<?php

namespace App\Http\Services;

class BreadcrumbServices
{

    public function generateBreadcrumbContacts(): array {
        return [
            'title' => 'Contactez-nous',
            'path' => ['Accueil' => route('accueil'), 'Contacts' => route('contacts')]
        ];
    }

    public function generateBreadcrumbFormations(?string $title = null): array
    {
        $data = [
            'title' => 'Nos Formations',
            'path' => ['Accueil' => route('accueil'), 'Formations' => route('formations')]
        ];

        if(!is_null($title)){
            $data['path'][$title] = route('formationDetails', ['formation' => $title]);
        }

        return $data;
    }

    public function generateBreadcrumbPublications(?string $title = null): array
    {
        $data = [
            'title' => 'Publications',
            'path' => ['Accueil' => route('accueil'), 'Publications' => route('publications')]
        ];

        if(!is_null($title)){
            $data['path'][$title] = route('publicationDetails', ['article' => $title]);
        }

        return $data;
    }
}
