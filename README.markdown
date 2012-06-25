# Giix-Haml

**Giix-Haml is based on Giix 1.9.1**

Original Giix project: http://code.google.com/p/giix/

## Before installing

Giix-Haml should run with:

* Yii 1.1.7+ (tested with revision 3340)
* Linux
* Apache 2.2 or nginx 0.8+
* MySQL 5.x
* PHP 5.2+

Giix-Haml may run on other setups, but there is no official suppport for them. There is no planned official support for other setups, including Windows/IIS, XAMPP/etc or other DBMS.

## Installing

1. Copy the directoryies "core" and "components" from the downloaded archive, or clone this repository, 
into your application's protected/extensions/giix-haml directory. You'll have to create the giix-haml directory.

2. Configure the gii generator path in your application, like:
bq.

        'modules' => array(
            'gii' => array(
        	'password'=>'[type your password here]',
                'ipFilters'=>array('127.0.0.1','::1'),
                'class' => 'system.gii.GiiModule',
                    'generatorPaths' => array(
                        'ext.giix-haml.core', // giix generators
                    ),
                ),
            ),
        . . .

3. Configure your application to automatically load the giix component classes when needed, like:

        'import' => array(
            ...
            'ext.giix-haml.components.*', // giix components
        ),

It is recommended to set at least the 'password' and 'ipFilters' properties in gii for security.

For more information see the gii documentation at <http://www.yiiframework.com/doc/api/GiiModule>.

Additionaly, you may remove the entire 'giix-haml.core' directory and generator
configuration (step 2 above) when releasing your Web application for improved
security.


## Using

After installing, you will see the giix generators on the gii page. The giix generators' names start with "giix".
When generating CRUD, select the **haml template** under the "Code template" option.

Read the gii doumentation at http://www.yiiframework.com/doc/api/GiiModule on how to use it.

If you want to use the GxActiveRecord::saveWithRelated method, you must first generate the pivot model 
for the cross-reference table of the relationship. The pivot model class is the active record between 
two other active records that have a MANY_MANY relationship.

If you have already generated models for every table in your schema, you are ready to use the method to 
save your MANY_MANY relations. If you use the support for saving MANY_MANY relations as generated, 
you will need to manually write code to support scenarios. This is an important security concern.