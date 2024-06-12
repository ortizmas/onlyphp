<?php
  /*
    Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
    You may assume that each input would have exactly one solution, and you may not use the same element twice.
    You can return the answer in any order.

    Example 1:
    Input: nums = [2,7,11,15], target = 9
    Output: [0,1]
    Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

    Example 2:
    Input: nums = [3,2,4], target = 6
    Output: [1,2]

    Example 3:
    Input: nums = [3,3], target = 6
    Output: [0,1]
    
    Constraints:
    2 <= nums.length <= 104
    -109 <= nums[i] <= 109
    -109 <= target <= 109
    Only one valid answer exists.
  */

    // Complexidade O(n^2)
    /*function twoSum($nums, $target) {
        for ($i=0; $i < count($nums); $i++) { 
            for ($j = $i + 1; $j < count($nums); $j++) { 
                $sum = $nums[$i] + $nums[$j];
                if ($sum === $target) {
                    return "[$i, $j]";
                }
            }
        }
    }*/

    // Best method O(1)
    /*function twoSum($nums, $target) {
        $hashMap = [];
        for($i=0;$i < count($nums);$i++){
            $secondIndex = $target - $nums[$i];
            if(isset($hashMap[$secondIndex])){
                return [$i, $hashMap[$secondIndex]];
            }else{
                $hashMap[$nums[$i]] = $i;
            }
        }
        return [];
    }*/

    // Complexidade O(1)
    function twoSum($nums, $target) {
        $hashMap = [];
        for($i=0;$i < count($nums);$i++){
            $hashMap[$nums[$i]] = $i;
        }

        for ($i=0; $i < count($nums); $i++) { 
            $complement = $target - $nums[$i];
            if (isset($hashMap[$complement]) && $hashMap[$complement] != $i) {
                return [$i, $hashMap[$complement]];
            }
        }
        return [];
    }

  $nums = [3,3]; // [3,2,4]; // [2,7,11,15];
  $target = 6; // 9;
  var_dump(twoSum($nums, $target));