re_once '../DbManager.php';

try {
  //データベースへの接続を確立
  //  $db = getDb();
  //    //INSERT命令の準備
  //      $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES(:isbn, :title, :price, :publish, :published)');
  //        // INSERT命令にポストデータの内容をセット
  //          $stt->bindValue(':isbn', $_POST['isbn']);
  //            $stt->bindValue(':title', $_POST['title']);
  //              $stt->bindValue(':price', $_POST['price']);
  //                $stt->bindValue(':publish', $_POST['publish']);
  //                  $stt->bindValue(':published', $_POST['published']);
  //                    // INSERT命令を実行
  //                      $stt->execute();
  //                        // 処理後は入力フォームにリダイレクト
  //                          header('+ocation: http//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/insert_form.php');
  //                          } catch(PDOException $e) {
  //                            die("エラ〜メッセージ：{$e->getMessage()}");
  //                            }
