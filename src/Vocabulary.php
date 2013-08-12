<?php
/**
 * @Entity
 */
class Vocabulary
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    
    /** @Column(unique=true) */
    protected $namespaceUri;
    
    /** @Column */
    protected $label;
    
    /** @Column(type="text", nullable=true) */
    protected $comment;
    
    public function getId()
    {
        return $this->id;
    }
}
