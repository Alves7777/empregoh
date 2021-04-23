<?php

declare(strict_types=1);

namespace App\Controller;


class JobsController extends AbstractController
{
    public function listAction(): void
    {
        $this->render('jobs/list');
    }

    public function addAction(): void
    {
        $this->render('jobs/add');
    }


    public function editAction(): void
    {
        $this->render('jobs/edit');
    }

    public function removeAction(): void
    {
        $this->render('jobs/remove');
    }

    public function detailsAction(): void
    {
        $this->render('jobs/details');
    }

}
