﻿<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mguide_line extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function get_prefecture($area){
		$query = $this->db->select('prefecture_name as name, prefecture_id as id')->where('area_name',$area)->get('prefecture');
		if($query->row_array()>0)
			return $query->result_array();
		else return false;
	}
	
	public function get_area(){
		$query = $this->db->query('SELECT `area_name` ,`area_name_furi`,`id`  FROM `area`');
		if($query->row_array()>0)
			return $query->result_array();
		else return false;
	}
	public function get_line($id){
		$query = $this->db->query("
									SELECT DISTINCT area_line_name 
									FROM prefecture, line, area_line
									WHERE prefecture.prefecture_id = area_line.prefecture_id
									AND area_line.area_line_id = line.area_line_id
									AND prefecture.prefecture_id = {$id}"
								);
		if($query->row_array() >0)
			return $query->result_array();
		else return false;
	}
	public function get_line_name($line){
		$query = $this->db->query("
									SELECT DISTINCT line_id, line_name
									FROM prefecture, line, area_line
									WHERE prefecture.prefecture_id = area_line.prefecture_id
									AND area_line.area_line_id = line.area_line_id
									AND area_line.area_line_name = '{$line}'
									");
		if($query->row_array() >0)
			return $query->result_array();
		else return false;
	}
	public function get_station($id){
		$query = $this->db->query("
									SELECT DISTINCT line_name, station_id, station_name
									FROM line, station
									WHERE station.line_id = line.line_id
									AND line.line_id = {$id}
								");
		if($query->row_array() >0)
			return $query->result_array();
		else return false;
	}
	public function count_work($id){
		$query = $this->db->query("
									SELECT DISTINCT station.station_id, count(work_id) as sl
									FROM station, station_work
									WHERE station.station_id = station_work.station_id
									AND line_id = {$id}
									GROUP BY station.station_id
								");
		if($query->num_rows()>0)
			return $query->result_array();
		else return false;
	}
	public function list_work($id){
		$query = $this->db->query("
									SELECT DISTINCT station_work.work_id,work_name, work_title, work_image_url, work_guild_station, work_content1, work_time
									FROM station_work, main_work
									WHERE
										station_work.station_id = {$id}
									AND station_work.work_id = main_work.work_id
								");
		if($query->num_rows()>0)
			return $query->result_array();
		else return false;
	}
	public function work_position($id){
		$query = $this->db->query("
									SELECT DISTINCT position_name, position_salary
									FROM station_work, position
									WHERE
										station_work.station_id = {$id}
									AND station_work.work_id = position.work_id
									LIMIT 3
								");
		if($query->num_rows()>0)
			return $query->result_array();
		else return false;
	}
}