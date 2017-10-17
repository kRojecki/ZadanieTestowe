<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Country extends \Application\Entity\Country implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'capital', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'code', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'code2', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'continent', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'GNP', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'GNPOld', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'governmentForm', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'headOfState', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'indepYear', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'lifeExpectancy', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'localName', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'name', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'population', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'region', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'surfaceArea', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'city'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'capital', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'code', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'code2', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'continent', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'GNP', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'GNPOld', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'governmentForm', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'headOfState', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'indepYear', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'lifeExpectancy', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'localName', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'name', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'population', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'region', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'surfaceArea', '' . "\0" . 'Application\\Entity\\Country' . "\0" . 'city'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Country $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapital()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapital', []);

        return parent::getCapital();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapital($capital)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapital', [$capital]);

        return parent::setCapital($capital);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getCode();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode2', []);

        return parent::getCode2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode2($code2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode2', [$code2]);

        return parent::setCode2($code2);
    }

    /**
     * {@inheritDoc}
     */
    public function getContinent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContinent', []);

        return parent::getContinent();
    }

    /**
     * {@inheritDoc}
     */
    public function setContinent($continent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContinent', [$continent]);

        return parent::setContinent($continent);
    }

    /**
     * {@inheritDoc}
     */
    public function getGNP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGNP', []);

        return parent::getGNP();
    }

    /**
     * {@inheritDoc}
     */
    public function setGNP($GNP)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGNP', [$GNP]);

        return parent::setGNP($GNP);
    }

    /**
     * {@inheritDoc}
     */
    public function getGNPOld()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGNPOld', []);

        return parent::getGNPOld();
    }

    /**
     * {@inheritDoc}
     */
    public function setGNPOld($GNPOld)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGNPOld', [$GNPOld]);

        return parent::setGNPOld($GNPOld);
    }

    /**
     * {@inheritDoc}
     */
    public function getGovernmentForm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGovernmentForm', []);

        return parent::getGovernmentForm();
    }

    /**
     * {@inheritDoc}
     */
    public function setGovernmentForm($governmentForm)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGovernmentForm', [$governmentForm]);

        return parent::setGovernmentForm($governmentForm);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeadOfState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeadOfState', []);

        return parent::getHeadOfState();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeadOfState($headOfState)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeadOfState', [$headOfState]);

        return parent::setHeadOfState($headOfState);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndepYear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndepYear', []);

        return parent::getIndepYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setIndepYear($indepYear)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIndepYear', [$indepYear]);

        return parent::setIndepYear($indepYear);
    }

    /**
     * {@inheritDoc}
     */
    public function getLifeExpectancy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLifeExpectancy', []);

        return parent::getLifeExpectancy();
    }

    /**
     * {@inheritDoc}
     */
    public function setLifeExpectancy($lifeExpectancy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLifeExpectancy', [$lifeExpectancy]);

        return parent::setLifeExpectancy($lifeExpectancy);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalName', []);

        return parent::getLocalName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalName($localName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalName', [$localName]);

        return parent::setLocalName($localName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPopulation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPopulation', []);

        return parent::getPopulation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPopulation($population)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPopulation', [$population]);

        return parent::setPopulation($population);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', []);

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion($region)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurfaceArea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurfaceArea', []);

        return parent::getSurfaceArea();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurfaceArea($surfaceArea)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurfaceArea', [$surfaceArea]);

        return parent::setSurfaceArea($surfaceArea);
    }

}
