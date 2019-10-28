<?php
require_once "ceklogin.php";
require_once "koneksi.php";



            		if(isset($_GET['page'])){
            		$page = $_GET['page'];
            		switch ($page) {
            			case 'pdf_user':
            				include "pdf_user.php";
            				break;
                              case 'pdf_operator':
                                    include "pdf_operator.php";
                                    break;
                              
                              case 'pdf_buah':
                                    include "pdf_buah.php";
                                    break;
                              case 'pdf_bunga':
                                    include "pdf_bunga.php";
                                    break;
                              case 'pdf_hias':
                                    include "pdf_hias.php";
                                    break;
                              case 'pdf_kacang':
                                    include "pdf_kacang.php";
                                    break;
                              case 'pdf_racun':
                                    include "pdf_racun.php";
                                    break;
                              case 'pdf_obat':
                                    include "pdf_obat.php";
                                    break;
                              case 'pdf_sayur':
                                    include "pdf_sayur.php";
                                    break;
                              case 'pdf_pohon':
                                    include "pdf_pohon.php";
                                    break;

                              case 'pdf_feedback':
                                    include "pdf_feedback.php";
                                    break;

                              case 'pdf_data-tanaman':
                                    include "pdf_data-tanaman.php";
                                    break;
                        
            			default:
            				include "404.php";
            				break;
            		}
            	}else{
            		include "home.php";
            	}
            ?>