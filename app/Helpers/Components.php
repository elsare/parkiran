<?php
use DB;
use Session;

class Component {
    public static function myOption($model, $id = '') {
        $myModel = $model
            ->select('id', 'name')
            ->get();

        $result  = '<option></option>';
        foreach ($myModel as $myData) {
            $result .= '<option value="' . $myData->id . '" ' . ((!empty($id)) ? (($id == $myData->id) ? ('selected') : ('')) : ('')) . '>' . $myData->name . '</option>';
        }

        return $result;
    }
}