<?php

class Map
{
    /**
     * @var int
     */
    private $width = 0;

    /**
     * @var int
     */
    private $height = 0;

    /**
     * Constructor
     *
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Draw map
     */
    public function draw()
    {
        // initializing output
        $output = "";

        // looping threw lines
        for ($i = 1; $i <= $this->height; $i++) {
            // looping threw columns
            for ($j = 1; $j <= $this->width; $j++) {
                $output .= "<div class=\"map-cell\">" . $i . " : " . $j . "</div>";
            }

            $output .= "<br />";
        }

        return $output;
    }

    /**
     * GETTERS AND SETTERS
     */

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param $width
     *
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
}