<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="job_website")
 */
class JobWebsite
{
    /**
     * 
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)     
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * 
     * @var string $name
     *
     * @ORM\Column(name="website_name", type="string", nullable=false)
     */
    private $websiteName;

    public function getWebsiteName()
    {
        return $this->websiteName;
    }
}

?>