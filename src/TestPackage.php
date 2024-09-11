<?php

namespace Yogeshb\Laraveltestpackage;

class TestPackage {
    public function getPattern($limit, $character){
        $selection = rand(0,6); //total number of patterns

        switch ($selection) {
            case 0:
                return $this->up_right_triangle1($limit, $character);
                break;
            case 1:
                return $this->down_right_triangle1($limit, $character);
                break;
            case 2:
                return $this->up_right_triangle2($limit, $character);
                break;
            case 3:
                return $this->down_right_triangle2($limit, $character);
                break;
            case 4:
                return $this->sqaure1($limit, $character);
                break;
            case 5:
                return $this->up_isocel_triangle1($limit, $character);
                break;
            case 6:
                return $this->down_isocel_triangle1($limit, $character);
                break;
            default:
                return "Invalid case for pattern generation, mistake in code";                                                                                                    
        }
    }


    protected function up_right_triangle1($limit, $character){
        return "Hello World! (!code is yet to implement_up_right_triangle1)";
    }

    protected function down_right_triangle1($limit, $character){
        return "Hello World! (!code is yet to implement_down_right_triangle1)";
    }

    protected function up_right_triangle2($limit, $character){
        return "Hello World! (!code is yet to implement_up_right_triangle2)";
    }

    protected function down_right_triangle2($limit, $character){
        return "Hello World! (!code is yet to implement_down_right_triangle2)";
    }

    protected function sqaure1($limit, $character){

        $rtnString = "This is a sqaure with ".$limit." limit\n\n";
        for ($i=0;$i<$limit;$i++){
            for ($j=0;$j<$limit;$j++){
                $rtnString.=$character;
            }
            $rtnString.="\n";
        }

        return $rtnString;
    }

    protected function up_isocel_triangle1($limit, $character){
        return "Hello World! (!code is yet to implement_up_isocel_triangle1)";
    }
    
    protected function down_isocel_triangle1($limit, $character){
        return "Hello World! (!code is yet to implement_down_isocel_triangle1)";
    }

    
}