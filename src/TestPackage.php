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

    // Upward right-angled triangle (left-aligned)
    protected function up_right_triangle1($limit, $character){
        $rtnString = "";
        for ($i=1; $i <= $limit; $i++) {
            $rtnString .= str_repeat($character, $i) . "\n";
        }
        return $rtnString;
    }

    // Downward right-angled triangle (left-aligned)
    protected function down_right_triangle1($limit, $character){
        $rtnString = "";
        for ($i=$limit; $i > 0; $i--) {
            $rtnString .= str_repeat($character, $i) . "\n";
        }
        return $rtnString;
    }

    // Upward right-angled triangle (right-aligned)
    protected function up_right_triangle2($limit, $character){
        $rtnString = "";
        for ($i=1; $i <= $limit; $i++) {
            $rtnString .= str_repeat(" ", $limit - $i) . str_repeat($character, $i) . "\n";
        }
        return $rtnString;
    }

    // Downward right-angled triangle (right-aligned)
    protected function down_right_triangle2($limit, $character){
        $rtnString = "";
        for ($i=$limit; $i > 0; $i--) {
            $rtnString .= str_repeat(" ", $limit - $i) . str_repeat($character, $i) . "\n";
        }
        return $rtnString;
    }

    // Square pattern
    protected function sqaure1($limit, $character){
        $rtnString = "";
        for ($i=0;$i<$limit;$i++){
            for ($j=0;$j<$limit;$j++){
                $rtnString.=$character;
            }
            $rtnString.="\n";
        }
        return $rtnString;
    }

    // Upward isosceles triangle
    protected function up_isocel_triangle1($limit, $character){
        $rtnString = "";
        for ($i=1; $i <= $limit; $i++) {
            $rtnString .= str_repeat(" ", $limit - $i) . str_repeat($character, 2 * $i - 1) . "\n";
        }
        return $rtnString;
    }

    // Downward isosceles triangle
    protected function down_isocel_triangle1($limit, $character){
        $rtnString = "";
        for ($i=$limit; $i > 0; $i--) {
            $rtnString .= str_repeat(" ", $limit - $i) . str_repeat($character, 2 * $i - 1) . "\n";
        }
        return $rtnString;
    }
}

