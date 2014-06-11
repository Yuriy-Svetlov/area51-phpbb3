<?php
/**
 * @package testing
 * @copyright (c) 2014 phpBB Group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

class phpbb_profilefield_type_int_test extends phpbb_test_case
{
    protected $cp;
    protected $field_options;

    /**
     * Sets up basic test objects
     *
     * @access public
     * @return void
     */
    public function setUp()
    {
        $user = $this->getMock('\phpbb\user');
        $user->expects($this->any())
            ->method('lang')
            ->will($this->returnCallback(array($this, 'return_callback_implode')));

        $request = $this->getMock('\phpbb\request\request');
        $template = $this->getMock('\phpbb\template\template');

        $this->cp = new \phpbb\profilefields\type\type_int(
            $request,
            $template,
            $user
        );

        $this->field_options = array(
            'field_type'     => '\phpbb\profilefields\type\type_int',
            'field_name' 	 => 'field',
            'field_id'	 	 => 1,
            'lang_id'	 	 => 1,
            'lang_name'      => 'field',
            'field_required' => false,
        );
    }

    public function get_profile_value_data()
    {
        return array(
            array(
                    '10',
                    array('field_show_novalue' => true),
                    10,
                    'Field should output integer value of given input',
            ),
            array(
                    '0',
                    array('field_show_novalue' => true),
                    0,
                    'Field should output integer value of given input',
            ),
            array(
                    '',
                    array('field_show_novalue' => true),
                    0,
                    'Field should translate empty value to 0 as integer',
                    false,
            ),
            array(
                    null,
                    array('field_show_novalue' => true),
                    0,
                    'Field should translate null value to 0 as integer',
            ),
            array(
                    '10',
                    array('field_show_novalue' => false),
                    10,
                    'Field should output integer value of given input',
            ),
            array(
                    '0',
                    array('field_show_novalue' => false),
                    0,
                    'Field should output integer value of given input',
            ),
            array(
                    '',
                    array('field_show_novalue' => false),
                    null,
                    'Field should leave empty value as is',
            ),
            array(
                    null,
                    array('field_show_novalue' => false),
                    null,
                    'Field should leave empty value as is',
            ),
        );
    }

    /**
     * @dataProvider get_profile_value_data
     */
    public function test_get_profile_value($value, $field_options, $expected, $description)
    {
        $field_options = array_merge($this->field_options, $field_options);

        $result = $this->cp->get_profile_value($value, $field_options);

        $this->assertSame($expected, $result, $description);
    }

    public function get_validate_profile_field_data()
    {
        return array(
            array(
                    '124',
                    array('field_minlen' => 2, 'field_maxlen' => 4, 'field_required' => true),
                    false,
                    'Field should accept input of correct length',
            ),
            array(
                    '556476',
                    array('field_maxlen' => 4, 'field_required' => true),
                    'FIELD_TOO_LARGE-4-field',
                    'Field should reject value of greater length',
            ),
            array(
                    '9',
                    array('field_minlen' => 2, 'field_required' => true),
                    'FIELD_TOO_SMALL-2-field',
                    'Field should reject value which is less than defined minlength',
            ),

            array(
                    '',
                    array('field_required' => true),
                    'FIELD_REQUIRED-field',
                    'Field should reject value for being empty',
            ),
        );
    }

    /**
     * @dataProvider get_validate_profile_field_data
     */
    public function test_validate_profile_field($value, $field_options, $expected, $description)
    {
        $field_options = array_merge($this->field_options, $field_options);

        $result = $this->cp->validate_profile_field($value, $field_options);

        $this->assertSame($expected, $result, $description);
    }

    public function return_callback_implode()
    {
        return implode('-', func_get_args());
    }
}
