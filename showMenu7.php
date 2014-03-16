<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<table class="ex5" id="table7" border="0">
                        <tr>
                            <th colspan="3">
                                ผลการตรวจทางห้องทดลอง
                            </th>
                        </tr>
                        <tr>
                            <td class="order">ลำดับ</td>
                            <td>ผลการตรวจ</td>

                            <td class="slideData" ><label>วันที่: </label><input type="text"   id="lab_date" placeholder="เลือกวันที่" class="datepicker" style="width: 70%;"/>
                                <label id="date_id" style="visibility:hidden;display: inline-block;width: 1px;"></label>
                            </td>

                        </tr>
                        <tr>
                            <td class="order">1</td>
                            <td>น้ำตาลในเลือด (FBS mg%)</td>
                            <td><input  class="slideData" id="fbs"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td class="order">2</td>
                            <td>ไขมันในเลือด</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="order">2.1</td>
                            <td>LDL</td>
                            <td><input  class="slideData" id="ldl"  type="text" style=""></td>
                        </tr>
                        <tr class="tg-even">
                            <td class="order">2.2</td>
                            <td>HDL</td>
                            <td><input  class="slideData" id="hdl"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td class="order">2.3</td>
                            <td>Cholesterol</td>
                            <td><input  class="slideData" id="Cholesterol"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td class="order">2.4</td>
                            <td>Triglyceride</td>
                            <td><input  class="slideData" id="Triglyceride"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td class="order">3</td>
                            <td>กาทำงานของไต</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="order">3.1</td>
                            <td>Creatinine</td>
                            <td><input  class="slideData" id="Creatinine"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td class="order">3.2</td>
                            <td>BUN</td>
                            <td><input  class="slideData" id="BUN"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td class="order">4</td>
                            <td>HbA1C</td>
                            <td><input  class="slideData" id="HbA1C"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>

                                <div class="pagination" id="page1" style="width:auto">
                                    <a href="#" class="first" data-action="first" style="width:40px;">
                                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;"><<</button>
                                    </a>

                                    <a href="#" class="previous" data-action="previous" style="width:40px;">
                                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;"><</button>
                                    </a>
                                    <button class="btn btn-success" id="save5" style="color:#484848; width: 80px;">บันทึก</button>
                 <!--                    <input type="text" readonly="readonly"/>-->
                                    <a href="#" class="next" data-action="next" style="width:40px;">
                                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;">></button>
                                    </a>
                                    <a href="#" class="last" data-action="last" style="width:40px;">
                                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;">>></button>
                                    </a>
                                </div>


<!--                <button class="btn btn-success" id="save5_left" style="color:#484848; width: 40px"><<</button>
<button class="btn btn-success" id="save5" style="color:#484848; width: 80px">บันทึก</button>
<button class="btn btn-success" id="save5_right" style="color:#484848; width: 40px">>></button>-->

                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><button class="btn btn-success" id="finish1" style="color:#484848; width: 80px;margin-top: 25px;">เสร็จสิ้น</button></td>
                        </tr>
                    </table>