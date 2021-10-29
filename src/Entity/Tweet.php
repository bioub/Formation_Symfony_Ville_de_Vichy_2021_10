<?php

namespace App\Entity;

use App\Repository\TweetRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=TweetRepository::class)
 * @ORM\Table(name="`tweet`")
 * @ORM\HasLifecycleCallbacks()
 */
class Tweet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private ?\DateTime $postedAt = null;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="tweets", fetch="EAGER")
     */
    private ?User $author = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getPostedAt(): ?\DateTimeInterface
    {
        return $this->postedAt;
    }

    public function setPostedAt(?\DateTimeInterface $postedAt): self
    {
        $this->postedAt = $postedAt;

        return $this;
    }

    // Appelée automatique en pre-persist (avant un INSERT)
    // PrePersist -> Lifecycle Hook (cf doc doctrine)
    // Si Lifecycle Hook dans la class
    // La classe elle même doit avoir l'annotation HasLifecycleCallbacks
    /**
     * @ORM\PrePersist()
     */
    public function setDefaultPostedAt()
    {
        if (!$this->postedAt) {
            $this->postedAt = new \DateTime('now');
        }
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }
}
