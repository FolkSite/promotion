<?php
/**
 * templateVars transport file for promotion extra
 *
 * Copyright 2016 by DANNY HARDING <danny@stuntrocket.co>
 * Created on 02-23-2016
 *
 * @package promotion
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $templateVars */


$templateVars = array();

$templateVars[1] = $modx->newObject('modTemplateVar');
$templateVars[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'type' => 'text',
  'name' => 'LinkedPerson',
  'caption' => 'Linked Person (Optional)',
  'description' => 'Link a persons name to a piece of content, for example a quote.',
  'elements' => '',
  'rank' => 0,
  'display' => 'default',
  'default_text' => 'Next',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'true',
    'maxLength' => '',
    'minLength' => '',
    'regex' => '',
    'regexText' => '',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
$templateVars[2] = $modx->newObject('modTemplateVar');
$templateVars[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'type' => 'listbox',
  'name' => 'DisplayShareControls',
  'caption' => 'Display Share Controls',
  'description' => '',
  'elements' => 'Yes==1||No==0',
  'rank' => 0,
  'display' => 'default',
  'default_text' => '1',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'true',
    'listWidth' => '',
    'title' => '',
    'typeAhead' => 'false',
    'typeAheadDelay' => '250',
    'forceSelection' => 'false',
    'listEmptyText' => '',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
$templateVars[3] = $modx->newObject('modTemplateVar');
$templateVars[3]->fromArray(array (
  'id' => 3,
  'property_preprocess' => false,
  'type' => 'listbox',
  'name' => 'DisplayRecommendations',
  'caption' => 'Display Recommendations',
  'description' => '',
  'elements' => 'Yes==1||No==0',
  'rank' => 0,
  'display' => 'default',
  'default_text' => '1',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'true',
    'listWidth' => '',
    'title' => '',
    'typeAhead' => 'false',
    'typeAheadDelay' => '250',
    'forceSelection' => 'false',
    'listEmptyText' => '',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
return $templateVars;
