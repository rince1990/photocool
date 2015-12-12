<?php

namespace multimediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UploadController extends Controller
{
    public function uploadAction(Request $request)
    {
        $form    = $app['form.factory']->createBuilder('form')
                    ->add('files', 'file', array(
                        'label'     => 'Files',
                        'attr' => array(
                            'multiple'  => 'multiple',
                            // 'accept'    => 'image/*'
                        )
                    ))
                    ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $data  = $request->files->get($form->getName());
                foreach ($data['files'] as $file) {
                    // Do whatever with the file
                }
            }

        }
    }
}
