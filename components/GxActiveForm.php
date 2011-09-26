<?php

/**
 * GxActiveForm class file.
 *
 * @author Rodrigo Coelho <rodrigo@giix.org>
 * @link http://giix.org/
 * @copyright Copyright &copy; 2010-2011 Rodrigo Coelho
 * @license http://giix.org/license/ New BSD License
 */

/**
 * GxActiveForm provides forms with additional features.
 *
 * @author Rodrigo Coelho <rodrigo@giix.org>
 */
class GxActiveForm extends CActiveForm {

	/**
	 * Renders a checkbox list for a model attribute.
	 * This method is a wrapper of {@link GxHtml::checkBoxList}.
	 * Please check {@link GxHtml::checkBoxList} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model The data model
	 * @param string $attribute The attribute
	 * @param array $data Value-label pairs used to generate the check box list.
	 * @param array $htmlOptions Additional HTML attributes.
	 * @return string The generated checkbox list
	 */
	public function checkBoxList($model, $attribute, $data, $htmlOptions = array()) {
		return GxHtml::activeCheckBoxList($model, $attribute, $data, $htmlOptions);
	}

	/**
	 * Renders a dropdown list for a model attribute of type ENUM.
	 * This method is a wrapper of {@link GxHtml::checkBoxList}.
	 * Please check {@link GxHtml::checkBoxList} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model The data model
	 * @param string $attribute The attribute
	 * @param array $htmlOptions Additional HTML attributes.
	 * @return string The generated checkbox list
	 */
	public function enumDropDownList($model, $attribute, $htmlOptions = array()) {
		return GxHtml::enumDropDownList( $model, $attribute, $htmlOptions );
	}
	
	/**
	 * Renders a radio button list for a model attribute of type ENUM.
	 * This method is a wrapper of {@link GxHtml::enumRadioButtonList}.
	 * Please check {@link GxHtml::enumRadioButtonList} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model The data model
	 * @param string $attribute The attribute
	 * @param array $htmlOptions Additional HTML attributes.
	 * @return string The generated checkbox list
	 */	
	public function enumRadioButtonList($model, $attribute, $htmlOptions = array())
	{
		return GxHtml::enumRadioButtonList($model, $attribute, $htmlOptions);
	}
}