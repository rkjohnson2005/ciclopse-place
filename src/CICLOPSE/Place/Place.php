<?php
namespace CICLOPSE\Place;
use CICLOPSE;

/**
 * Class Place
 * @package CICLOPSE\Place
 * @property int place_id
 * @property string place_name
 * @property int warranty_id
 * @property int group_id
 * @property int project_id
 * @property string date
 * @property int driving_stations
 * @property double warrantable_value
 * @property double contract_value
 * @property string files_location
 * @property string description
 * @property string notes
 * @property string remote_access
 * @property string last_update
 * @property int last_update_user
 * @property string created
 * @property string external_id
 */
class Place extends CICLOPSE\Standard
{
    private $place_id;
    private $place_name;
    private $date;
    private $driving_stations;
    private $warrantable_value;
    private $contract_value;
    private $files_location;
    private $description;
    private $notes;
    private $remote_access;
    private $last_update;
    private $last_update_user;
    private $created;
    private $external_id;

    public function __construct($id = '')
    {
        $place_information = \CICLOPSE\Database::select(CICLOPSE_DATABASE, "SELECT place_id, place_name, warranty_id, group_id, project_id, date, driving_stations, warrantable_value, contract_value, files_location, description, notes, remote_access, jira_field, jira_value, jira_project, last_update, last_update_user, created, salesforce_id, jira_key FROM place WHERE place_id = ? LIMIT 1;", [$id]);

        $this->place_id = $place_information->place_id;
        $this->place_name = $place_information->place_name;
        $this->warranty_id = $place_information->warranty_id;
        $this->group_id = $place_information->group_id;
        $this->project_id = $place_information->project_id;
        $this->date = $place_information->date;
        $this->driving_stations = $place_information->driving_stations;
        $this->warrantable_value = $place_information->warrantable_value;
        $this->contract_value = $place_information->contract_value;
        $this->files_location = $place_information->files_location;
        $this->description = $place_information->description;
        $this->notes = $place_information->notes;
        $this->remote_access = $place_information->remote_access;
        $this->last_update = $place_information->last_update;
        $this->last_update_user = $place_information->last_update_user;
        $this->created = $place_information->created;

        // Legacy Export information
        $this->external_id = $place_information->salesforce_id; //TODO: Change to generic external_id
    }

    /**
     * @return int
     */
    public function getPlaceId()
    {
        return $this->place_id;
    }

    /**
     * @param int $place_id
     */
    public function setPlaceId($place_id)
    {
        $this->place_id = $place_id;
    }

    /**
     * @return string
     */
    public function getPlaceName()
    {
        return $this->place_name;
    }

    /**
     * @param string $place_name
     */
    public function setPlaceName($place_name)
    {
        $this->place_name = $place_name;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getDrivingStations()
    {
        return $this->driving_stations;
    }

    /**
     * @param int $driving_stations
     */
    public function setDrivingStations($driving_stations)
    {
        $this->driving_stations = $driving_stations;
    }

    /**
     * @return float
     */
    public function getWarrantableValue()
    {
        return $this->warrantable_value;
    }

    /**
     * @param float $warrantable_value
     */
    public function setWarrantableValue($warrantable_value)
    {
        $this->warrantable_value = $warrantable_value;
    }

    /**
     * @return float
     */
    public function getContractValue()
    {
        return $this->contract_value;
    }

    /**
     * @param float $contract_value
     */
    public function setContractValue($contract_value)
    {
        $this->contract_value = $contract_value;
    }

    /**
     * @return string
     */
    public function getFilesLocation()
    {
        return $this->files_location;
    }

    /**
     * @param string $files_location
     */
    public function setFilesLocation($files_location)
    {
        $this->files_location = $files_location;
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return string
     */
    public function getRemoteAccess()
    {
        return $this->remote_access;
    }

    /**
     * @param string $remote_access
     */
    public function setRemoteAccess($remote_access)
    {
        $this->remote_access = $remote_access;
    }

    /**
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * @param string $last_update
     */
    public function setLastUpdate($last_update)
    {
        $this->last_update = $last_update;
    }

    /**
     * @return int
     */
    public function getLastUpdateUser()
    {
        return $this->last_update_user;
    }

    /**
     * @param int $last_update_user
     */
    public function setLastUpdateUser($last_update_user)
    {
        $this->last_update_user = $last_update_user;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * @param string $salesforce_id
     */
    public function setExternalId($external_id)
    {
        $this->external_id = $external_id;
    }

}