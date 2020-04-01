<?php
class Form
{
	protected $htmlCode = [];

	public function __construct($options = [])
	{
		$this->htmlCode[] = sprintf(
			'<form method="%s" action="%s">',
			isset($options['method']) ? $options['method'] : '',
			isset($options['action']) ? $options['action'] : ''
		);
	}

	public function textbox($options = [])
	{
		$this->htmlCode[] = sprintf(
			'<div><label>%s</label>' .
				'<input type="text" name="%s" value="%s" maxlength="%s" %s>' .
				'</div><br>',
			isset($options['label']) ? $options['label'] : '',
			isset($options['name']) ? $options['name'] : '',
			isset($options['value']) ? $options['value'] : '',
			isset($options['length']) ? $options['length'] : '',
			isset($options['required']) && $options['required'] === true ? 'required' : ''
		);
	}

	public function select($options = [])
	{
		$selectOptions = [];
		foreach ($options['options'] as $key => $value) {
			$selectOptions[] = sprintf(
				'<option value="%s">%s</option>',
				$key,
				$value
			);
		}
		$this->htmlCode[] = sprintf(
			'<label for="%s">%s</label>' .
				'<select name="%s">%s</select><br>',
			isset($options['name']) ? $options['name'] : '',
			isset($options['labelfor']) ? $options['label'] : '',
			isset($options['label']) ? $options['label'] : '',
			implode('', $selectOptions)
		);
	}

	public function email($options = [])
	{
		$this->htmlCode[] = sprintf(
			'<div><label>%s</label>' .
				'<input type="email" name="%s" value="%s" %s>' .
				'</div><br>',
			isset($options['label']) ? $options['label'] : '',
			isset($options['name']) ? $options['name'] : '',
			isset($options['value']) ? $options['value'] : '',
			isset($options['required']) && $options['required'] === true ? 'required' : ''
		);
	}

	public function textarea($options = [])
	{
		$this->htmlCode[] = sprintf(
			'<label for="%s">%s</label>' .
				'<textarea %s>%s</textarea><br>',
			isset($options['labelfor']) ? $options['labelfor'] : '',
			isset($options['label']) ? $options['label'] : '',
			isset($options['required']) && $options['required'] === true ? 'required' : '',
			isset($options['text']) ? $options['text'] : ''
		);
	}

	public function button($options = [])
	{
		$this->htmlCode[] = sprintf(
			'<br><button type="%s">%s</button><br>',
			isset($options['type']) ? $options['type'] : '',
			isset($options['text']) ? $options['text'] : ''
		);
	}

	public function hidden($options = [])
	{
		$this->htmlCode[] = sprintf(
			'<div><label>%s</label>' .
				'<input type="hidden" name="%s" value="%s">' .
				'</div><br>',
			isset($options['label']) ? $options['label'] : '',
			isset($options['name']) ? $options['name'] : '',
			isset($options['value']) ? $options['value'] : ''
		);
	}

	public function submit($options = [])
	{
		$this->htmlCode[] = sprintf(
			'<br><button type="submit">%s</button><br>',
			isset($options['text']) ? $options['text'] : ''
		);
	}

	public function radioBtn($options = [])
	{
		foreach ($options['options'] as $key => $value) {
			$this->htmlCode[] = sprintf(
				'<br><label for="%s">%s</label>'.
				'<input type="radio" name="'.$options['name'].'" value="%s"><br>',
				isset($options['labelfor']) ? $options['labelfor']:'',
				$value,
				$value
				);
		}
	}

	public function html()
	{
		$this->htmlCode[] = '</form>';
		return implode(' ', $this->htmlCode);
	}
}
