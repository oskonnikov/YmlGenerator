<?php

/*
 * This file is part of the Bukashk0zzzYmlGenerator
 *
 * Created by
 * (c) Oleg Skonnikov <admin@xdevops.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\YmlGenerator\Model;

/**
 * Class Promo
 */
class Promo
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $startDate;

    /**
     * @var string
     */
    private $endDate;

    /**
     * @var string
     */
    private $description;

    /**
     * @var array
     */
    private $productOffers;

    /**
     * @var array
     */
    private $promoGifts;

    /**
     * @var string
     */
    private $requiredQuantity;


    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Promo
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Promo
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     *
     * @return Promo
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     *
     * @return Promo
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Promo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return array
     */
    public function getProductOffers()
    {
        return $this->productOffers;
    }

    /**
     * @param array $productOffers
     *
     * @return Promo
     */
    public function setProductOffers($productOffers)
    {
        $this->productOffers = $productOffers;

        return $this;
    }

    /**
     * @return array
     */
    public function getPromoGifts()
    {
        return $this->promoGifts;
    }

    /**
     * @param array $promoGifts
     *
     * @return Promo
     */
    public function setPromoGifts($promoGifts)
    {
        $this->promoGifts = $promoGifts;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequiredQuantity()
    {
        return $this->requiredQuantity;
    }

    public function setRequiredQuantity($requiredQuantity)
    {
        $this->requiredQuantity = $requiredQuantity;

        return $this;
    }
}