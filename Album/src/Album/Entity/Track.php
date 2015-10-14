<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Track
 *
 * @ORM\Table(name="track", indexes={@ORM\Index(name="IDX_D6E3F8A61137ABCF", columns={"album_id"})})
 * @ORM\Entity
 */
class Track
{
    /**
     * @var integer
     *
     * @ORM\Column(name="track_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="track_track_id_seq", allocationSize=1, initialValue=1)
     */
    private $trackId;

    /**
     * @var string
     *
     * @ORM\Column(name="track_title", type="string", length=255, nullable=true)
     */
    private $trackTitle;

    /**
     * @var \Album\Entity\Album
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     * })
     */
    private $album;



    /**
     * Get trackId
     *
     * @return integer
     */
    public function getTrackId()
    {
        return $this->trackId;
    }

    /**
     * Set trackTitle
     *
     * @param string $trackTitle
     *
     * @return Track
     */
    public function setTrackTitle($trackTitle)
    {
        $this->trackTitle = $trackTitle;

        return $this;
    }

    /**
     * Get trackTitle
     *
     * @return string
     */
    public function getTrackTitle()
    {
        return $this->trackTitle;
    }

    /**
     * Set album
     *
     * @param \Album\Entity\Album $album
     *
     * @return Track
     */
    public function setAlbum(\Album\Entity\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \Album\Entity\Album
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
