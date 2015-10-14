<?php


namespace Cycloo\Domain;


class Bike

{

    /**

     * bike id.

     *

     * @var integer

     */

    private $id;


    /**

     * bike name.

     *

     * @var string

     */

    private $name;


    /**

     * bike content.

     *

     * @var string

     */

    private $content;


    public function getId() {

        return $this->id;

    }


    public function setId($id) {

        $this->id = $id;

    }


    public function getName() {

        return $this->name;

    }


    public function setName($name) {

        $this->name = $name;

    }


    public function getContent() {

        return $this->content;

    }


    public function setContent($content) {

        $this->content = $content;

    }

}