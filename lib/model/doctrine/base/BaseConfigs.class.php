<?php

/**
 * BaseConfigs
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property varchar $name
 * @property varchar $description
 * @property clob $content
 * @property Doctrine_Collection $Matchs
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method varchar             getName()        Returns the current record's "name" value
 * @method varchar             getDescription() Returns the current record's "description" value
 * @method clob                getContent()     Returns the current record's "content" value
 * @method Doctrine_Collection getMatchs()      Returns the current record's "Matchs" collection
 * @method Configs             setId()          Sets the current record's "id" value
 * @method Configs             setName()        Sets the current record's "name" value
 * @method Configs             setDescription() Sets the current record's "description" value
 * @method Configs             setContent()     Sets the current record's "content" value
 * @method Configs             setMatchs()      Sets the current record's "Matchs" collection
 * 
 * @package    PhpProject1
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseConfigs extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('configs');
        $this->hasColumn('id', 'integer', 20, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 20,
             ));
        $this->hasColumn('name', 'varchar', 50, array(
             'type' => 'varchar',
             'length' => 50,
             ));
        $this->hasColumn('description', 'varchar', 255, array(
             'type' => 'varchar',
             'length' => 255,
             ));
        $this->hasColumn('content', 'clob', 65532, array(
             'type' => 'clob',
             'length' => 65532,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Matchs', array(
             'local' => 'id',
             'foreign' => 'config_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}