<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
header('Content-Type: text/html; charset=utf-8');

session_start();

$name1 = $_SESSION['name'];
$sname1 = $_SESSION['sname'];

echo "<table class='ex1' border='0' >
                            <tr>
                                <td>
                                    <div class='control-group'>
                                        <label class='control-label' for='name'>ชื่อผู้ป่วย:</label> 
                                        <div class='controls' >
                                            <h4>$name1</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class='control-group'>
                                        <label class='control-label' >นามสกุลผู้ป่วย:</label>  
                                        <div class='controls' >
                                           <h4>$sname1</h4> 
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class='control-group'>
                                        <label class='control-label'>อายุ:</label> 
                                        <div class='controls' >
                                            <input class='w_input' name='age' id='age'  type='text' style=''>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class='control-group'>
                                        <label class='control-label' >อาชีพ:</label>
                                        <div class='controls' > 
                                            <input class='w_input' name='job' id='job'  type='text' style=''>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class='control-group'>
                                        <label class='control-label' >เบอร์โทร:</label>
                                        <div class='controls' >
                                            <input class='w_input' name='tel' id='tel' type='text' style=''>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='control-group'>

                                        <label class='control-label' >ชื่อผู้ดูแล:</label>
                                        <div class='controls' > 
                                            <input class='w_input' name='dname' id='dname'  type='text' style=''>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class='control-group'>
                                        <label class='control-label' >นามสกลุผู้ดูแล:</label>
                                        <div class='controls' >
                                            <input class='w_input' name='dsname' id='dsname'  type='text' style=''>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class='control-group'>
                                        <label class='control-label' >ความเกี่ยวข้อง:</label>
                                        <div class='controls' > 
                                            <input class='w_input' name='with' id='with'  type='text' style=''>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class='control-group'>
                                        <label class='control-label' >อาชีพ:</label>
                                        <div class='controls' > 
                                            <input class='w_input' name='djob' id='djob'  type='text' style=''>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class='control-group'>
                                        <label class='control-label' >เบอร์โทร:</label>
                                        <div class='controls' >
                                            <input class='w_input' name='dtel' id='dtel'  type='text' style=''>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>";

session_destroy();
?>
