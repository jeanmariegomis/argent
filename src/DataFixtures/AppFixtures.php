<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use App\Entity\Entreprise;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $actif='Actif';
        $profilSup=new Profil();
        $profilSup->setLibelle('Super-admin');

        $manager->persist($profilSup);
        
        $profilCaiss=new Profil();
        $profilCaiss->setLibelle('Caissier');
        $manager->persist($profilCaiss);
        
        $profilAdP=new Profil();
        $profilAdP->setLibelle('admin-Principal');
        $manager->persist($profilAdP);
        
        $profilAdm=new Profil();
        $profilAdm->setLibelle('admin');
        $manager->persist($profilAdm);
        
        $profilUtil=new Profil();
        $profilUtil->setLibelle('utilisateur');
        $manager->persist($profilUtil);
        

        $wari=new Entreprise();
        $wari->setRaisonSociale('Wari')
                    ->setNinea(strval(rand(150000000,979999999)))
                    ->setAdresse('Zig')
                    ->setStatus($actif);
        $manager->persist($wari);
        $SupUser=new Utilisateur();
        $password = $this->encoder->encodePassword ($SupUser, 'pass');
        $SupUser->setPassword($password);
        
        $SupUser->setUsername('Jean')
        ->setUpdatedAt(new \DateTime())
        ->setEntreprise($wari)

        ->setNom('Jean Marie')
        ->setEmail('jean@gmail.com')
        ->setTelephone(rand(770000000,779999999))
        ->setNci(strval(rand(150000000,979999999)))
        ->setStatus($actif)
        ->setProfil($profilSup)
             ->setRoles(['ROLE_Super-admin'])
             ->setImageName('image.png');
           
             
             
        $manager->persist($SupUser);
        $manager->flush();
    }
}
