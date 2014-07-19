<?php

namespace Order\Entity;

class Order
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $client;
    
    /**
     * @var int
     */
    protected $manager;
    
    /**
     * @var int
     */
    protected $calculation;
    
    /**
     * @var int
     */
    protected $state;
	
	/**
	 * Get Order Id
	 * 
	 * @return the int
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set Order Id
	 * 
	 * @param int $id        	
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * Get Client Id
	 * 
	 * @return the int
	 */
	public function getClient() {
		return $this->client;
	}
	
	/**
	 * Set Client Id
	 * 
	 * @param int $client        	
	 */
	public function setClient($client) {
		$this->client = $client;
		return $this;
	}
	
	/**
	 * Get Manager Id
	 * 
	 * @return the int
	 */
	public function getManager() {
		return $this->manager;
	}
	
	/**
	 * Set MAnager Id
	 * 
	 * @param int $manager        	
	 */
	public function setManager($manager) {
		$this->manager = $manager;
		return $this;
	}
	
	/**
	 * Get Calculation Id
	 * 
	 * @return the int
	 */
	public function getCalculation() {
		return $this->calculation;
	}
	
	/**
	 * Set Calculation Id
	 * 
	 * @param int $calculation        	
	 */
	public function setCalculation($calculation) {
		$this->calculation = $calculation;
		return $this;
	}
	
	/**
	 * Get Order State
	 * 
	 * @return the int
	 */
	public function getState() {
		return $this->state;
	}
	
	/**
	 * Set Order State
	 * 
	 * @param int $state        	
	 */
	public function setState($state) {
		$this->state = $state;
		return $this;
	}
	

}
