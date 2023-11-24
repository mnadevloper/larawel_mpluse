<?php

namespace App\Helpers;

use Exception;
use Illuminate\Support\Facades\DB;

// use Illuminate\Pagination\Paginator;
// use Illuminate\Pagination\LengthAwarePaginator;

class CommonHelper
{

    public function pr($arr, $exit = true)
    {
        echo "<pre>";
        print_r($arr->toArray());
        ($exit) ? die : '';
    }
    /**need to insert data and return last inserted id */
    public function insert($table, $arr)
    {
        try {
            if (!empty($table) && !empty($arr)) {
                DB::beginTransaction();
                $id = DB::table($table)->insertGetId($arr);
                DB::commit();
                return $id;
            } else {
                return 0;
            }
        } catch (Exception $e) {
            DB::rollBack();
            return 0;
        }
    }

    /**Need to get all data */
    public function getData($table, $select = '*', $option = [])
    {
        try {
            $query = DB::table($table);

            if (!empty($select)) {
                // $query->select($select);
                $query->selectRaw($select);  //we use select raw method because select method not work for multiple column value
            }


            if (!empty($option['where'])) {
                $query->where($option['where']);
            }

            if (!empty($option['orderByfield']) && !empty($option['orderByVal'])) {
                $query->orderBy($option['orderByfield'], $option['orderByVal']);
            }

            if (!empty($option['limit'])) {
                $offset = !empty($option['start']) ? $option['start'] : 0;
                $query->limit($option['limit'])->offset($offset);
            }
            return $query->get();
        } catch (Exception $e) {
            return [];
        }
    }


    /**Need to update data */
    public function updateData($table, $data, $cond, $val)
    {
        return DB::table($table)->where($cond, $val)->update($data);
        // DB::enableQueryLog();

        // DB::table($table)->where($cond, $val)->update($data);

        // $queries = DB::getQueryLog();
        // $lastQuery = end($queries)['query'];

        // return $lastQuery;
    }

    /**Need to get first record */
    public function getFirstData($table, $select = '*', $option = [])
    {
        try {
            $query = DB::table($table);

            if (!empty($select)) {
                // $query->select($select);
                $query->selectRaw($select);  //we use select raw method because select method not work for multiple column value
            }

            if (!empty($option['where'])) {
                $query->where($option['where']);
            }

            if (!empty($option['orderByfield']) && !empty($option['orderByVal'])) {
                $query->orderBy($option['orderByfield'], $option['orderByVal']);
            }

            // Fetch only the first record
            return $query->first();
        } catch (Exception $e) {
            return null;
        }
    }

    /**Need to delete data */
    public function deleteWhere($table, $arr)
    {
        try {
            if (!empty($table) && !empty($arr)) {
                DB::beginTransaction();
                $res = DB::table($table)->where($arr)->delete();
                DB::commit();
                return $res;
            } else {
                return 0;
            }
        } catch (Exception $e) {
            DB::rollBack();
            return 0;
        }
    }


    public function joinTwoTable($table1, $table2, $select, $column1, $column2, $type, $option = [])
    {
        try {
            $query = DB::table($table1)
                ->selectRaw($select)
                ->join($table2, $column1, '=', $column2, $type);

            if (!empty($option)) {
                if (!empty($option['where'])) {
                    $query->where($option['where']);
                }
                if (!empty($option['orderByfield']) && !empty($option['orderByVal'])) {
                    $query->orderBy($option['orderByfield'], $option['orderByVal']);
                }
                if (!empty($option['limit'])) {
                    $offset = !empty($option['start']) ? $option['start'] : 0;
                    $query->limit($option['limit'])->offset($offset);
                }
            }
        //     $sqlQuery = $query->toSql(); // Get the SQL query
        //          // Print the SQL query
        // echo "Generated SQL Query: $sqlQuery";die;
            $result = $query->get();

            if ($result->isNotEmpty()) {
                return $result;
            } else {
                return [];
            }
        } catch (\Throwable $th) {
            return [];
        }
    }



    public function joinThreeTable($table1, $table2, $table3, $select, $on1, $type1, $on2, $type2, $option = [])
    {
        try {
            $query = DB::table($table1)
                ->select($select)
                ->join($table2, $on1, $type1)
                ->join($table3, $on2, $type2);

            if (!empty($option)) {
                if (!empty($option['where'])) {
                    $query->where($option['where']);
                }
                if (!empty($option['orderByfield']) && !empty($option['orderByVal'])) {
                    $query->orderBy($option['orderByfield'], $option['orderByVal']);
                }
                if (!empty($option['limit'])) {
                    $offset = !empty($option['start']) ? $option['start'] : 0;
                    $query->limit($option['limit'])->offset($offset);
                }
            }

            $result = $query->get();

            if ($result->isNotEmpty()) {
                // return $result->toArray();
                return $result;
            } else {
                return [];
            }
        } catch (\Throwable $th) {
            return [];
        }
    }


    public function joinFourTable($table1, $table2, $table3, $table4, $select, $on1, $type1, $on2, $type2, $on3, $type3, $option = [])
    {
        try {
            $query = DB::table($table1)
                ->select($select)
                ->join($table2, $on1, $type1)
                ->join($table3, $on2, $type2)
                ->join($table4, $on3, $type3);

            if (!empty($option)) {
                if (!empty($option['where'])) {
                    $query->where($option['where']);
                }
                if (!empty($option['orderByfield']) && !empty($option['orderByVal'])) {
                    $query->orderBy($option['orderByfield'], $option['orderByVal']);
                }
                if (!empty($option['limit'])) {
                    $offset = !empty($option['start']) ? $option['start'] : 0;
                    $query->limit($option['limit'])->offset($offset);
                }
            }

            $result = $query->get();

            if ($result->isNotEmpty()) {
                // return $result->toArray();
                $result;
            } else {
                return [];
            }
        } catch (\Throwable $th) {
            return [];
        }
    }


    /**Need to apply pagination on data  using package*/

    // public function getDataPaginated($table, $select = '*', $option = [])
    // {
    //     try {
    //         $query = DB::table($table);

    //         if (!empty($select)) {
    //             $query->selectRaw($select);
    //         }

    //         if (!empty($option['where'])) {
    //             $query->where($option['where']);
    //         }

    //         if (!empty($option['orderByField']) && !empty($option['orderByVal'])) {
    //             $query->orderBy($option['orderByField'], $option['orderByVal']);
    //         }

    //         // Paginate the results
    //         $perPage = !empty($option['limit']) ? $option['limit'] : 10; // Default per page limit is 10
    //         $currentPage = Paginator::resolveCurrentPage('page');

    //         Paginator::currentPageResolver(function () use ($currentPage) {
    //             return $currentPage;
    //         });

    //         $results = $query->paginate($perPage);

    //         return $results;
    //     } catch (Exception $e) {
    //         return [];
    //     }
    // }

    /**Need to apply pagination on data without package */
    public function getDataPaginated($table, $select = '*', $option = [])
    {
        try {
            $query = DB::table($table);

            if (!empty($select)) {
                $query->selectRaw($select);
            }

            if (!empty($option['where'])) {
                $query->where($option['where']);
            }

            if (!empty($option['orderByField']) && !empty($option['orderByVal'])) {
                $query->orderBy($option['orderByField'], $option['orderByVal']);
            }

            // Paginate the results
            $perPage = !empty($option['limit']) ? $option['limit'] : 10; // Default per page limit is 10
            $results = $query->paginate($perPage);

            return $results;
        } catch (Exception $e) {
            return [];
        }
    }
}
