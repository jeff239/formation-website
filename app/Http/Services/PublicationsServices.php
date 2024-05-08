<?php

namespace App\Http\Services;

use App\BaseInterface;
use App\Http\Repositories\PublicationRepository;
use App\Models\Publication;
use Illuminate\Database\Eloquent\Collection;

class PublicationsServices
{
    public PublicationRepository $publicationRepository;

    public function __construct()
    {
        $this->publicationRepository = new PublicationRepository();
    }

    public function index(): Collection {
        return $this->publicationRepository->index();
    }

    public function getPublicationBySlug($slug): ?Publication{
        return $this->publicationRepository->getPublicationBySlug($slug);
    }

    public function getRandomPublications(string $slug, int $limit = 4): Collection {
        return $this->publicationRepository->getRandomPublications($slug, $limit);
    }

    public function getPublicationsByCategory(string $category):Collection{
        return $this->publicationRepository->getPublicationsByCategory($category);
    }
}
