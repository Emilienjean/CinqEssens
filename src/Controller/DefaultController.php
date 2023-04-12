<?php

namespace App\Controller;

class DefaultController extends AbstractController
{

    /**
     * @return string
     * @throws \Exception
     */
    public function home(): string
    {

        return $this->render('home.php', [
            'seo_title' => 'Page d\'accueil',
        ]);
    }

    public function pack(): string
    {

        return $this->render('pack.php', [
            'seo_title' => 'Page pack',
        ]);
    }


}