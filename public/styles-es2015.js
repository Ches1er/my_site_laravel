(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["styles"],{

/***/ "./node_modules/@angular-devkit/build-angular/src/angular-cli-files/plugins/raw-css-loader.js!./node_modules/postcss-loader/src/index.js?!./src/styles.css":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/@angular-devkit/build-angular/src/angular-cli-files/plugins/raw-css-loader.js!./node_modules/postcss-loader/src??embedded!./src/styles.css ***!
  \*****************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = [[module.i, "/* You can add global styles to this file, and also import other style files */\n\n*{\n  margin: 0;\n  padding: 0;\n}\n\n.container{\n  width: 100%;\n  margin: 0 auto;\n  background-image: url('http://mydomain/img/bgc/white_wall_hash.png');\n  display: inline-flex;\n  flex-flow: column;\n  align-items: center;\n}\n\n.wrapper{\n  border-radius: 5px;\n  margin: 10px 0;\n  width: 80%;\n  background-image: url('http://mydomain/img/bgc/concrete_seamless.png');\n  display: inline-flex;\n  flex-flow: row;\n}\n\nheader, footer{\n  background-color: #fff;\n  width: 100%;\n  height: auto;\n}\n\nfooter {\n  display: inline-flex;\n  flex-flow: row nowrap;\n  border-top: 1px solid #C0C0C0;\n  border-bottom: 1px solid #C0C0C0;\n}\n\n/* Main*/\n\n.main_content{\n  width: 100%;\n  box-sizing: border-box;\n  display: inline-flex;\n  flex-flow: row wrap;\n  border: 1px solid rgba(0,0,0,.1);\n  padding: 5px;\n}\n\n.main_content_header{\n  width: 100%;\n  padding: 0 0 10px 0;\n  font-size: 1.5em;\n  color: #505050;\n  font-family: 'Oswald', sans-serif;\n\n}\n\n.products_unit_header{\n  font-size: 2em;\n  width: 100%;\n  padding: 0 0 10px 0;\n  background-image: url('http://mydomain/img/bgc/white_wall_hash.png');\n  color: #505050;\n  font-family: 'Oswald', sans-serif;\n  font-weight: bold;\n}\n\n.main_nav{\n  height: auto;\n  background-color: #fff;\n  margin-bottom: 10px;\n  border: 1px solid rgba(0,0,0,.1);\n}\n\n.main_content_left{\n  width: 30%;\n}\n\n.main_content_right{\n  width: 70%;\n  border: 1px solid #C0C0C0;\n  box-sizing: border-box;\n  box-shadow: 0 5px 5px 0 rgba(0,0,0, .2);\n}\n\nbutton {\n\n}\n\n/* Main content nav */\n\n.main_nav ul{\n  width: 100%;\n  list-style: none;\n  padding: 5px;\n  display: inline-flex;\n  flex-flow: row nowrap;\n  justify-content: space-around;\n}\n\n.main_nav ul li{\n  display: inline-block;\n  width: auto;\n}\n\n.main_nav ul li a{\n  color: #325c8e;\n  display: block;\n  width: 100%;\n  text-align: center;\n  text-decoration: none;\n  height: 30px;\n  line-height: 30px;\n  font-family: 'Scada', sans-serif;\n}\n\n.main_nav ul li a:hover {\n   transition: 0.5s;\n   color: #505050;\n}\n\n/* Main left list */\n\n.news_list {\n  list-style: none;\n}\n\n.news_list li {\n  display: inline-flex;\n  flex-flow: column nowrap;\n}\n\n.news_list li .news_name {\n  color: #417dbe;\n}\n\n.news_list li .news_short {\n  color: black;\n  font-size: small;\n}\n\n/*production by - list*/\n\n.production_by_list{\n  list-style: none;\n  padding: 5px;\n}\n\n.production_by_list_unit{\n  color: #417dbe;\n  cursor: pointer;\n}\n\n.products_by_list_products {\n  list-style: none;\n  margin: 5px;\n}\n\n.products_by_list_product{\n  font-size: small;\n  color: #1d4ebe;\n  cursor: pointer;\n}\n\n.product_block{\n  width: 100%;\n  padding: 5px;\n  display: inline-flex;\n  flex-flow: column nowrap;\n}\n\n.product_block_img_name{\n  width: 100%;\n  display: inline-flex;\n  flex-flow: row nowrap;\n}\n\n.product_block_img img{\n  width: 200px;\n  height: auto;\n}\n\n.product_block_name{\n  font-family: 'Roboto', sans-serif;\n  color: #505050;\n  margin: 5px 0 10px 0;\n  width: 100%;\n  text-align: center;\n  font-size: 28px;\n}\n\n.product_block_tech_info{\n  font-family: 'Roboto', sans-serif;\n  color: #505050;\n}\n\n/* Main right */\n\n.main_right_header {\n  text-align: center;\n  font-size: larger;\n  font-family: 'Oswald', sans-serif;\n  width: 100%;\n  margin: 10px 0;\n  padding: 10px;\n  color: #505050;\n}\n\n.main_right_unit_header {\n  font-family: 'Oswald', sans-serif;\n  width: 100%;\n  margin: 10px 0;\n  padding: 10px;\n  color: #727272;\n}\n\n/* Main right news*/\n\n.news{\n  display: inline-flex;\n  flex-flow: column;\n  width: 100%;\n}\n\n.news .news_name{\n  width: 100%;\n  text-align: center;\n}\n\n.news .news_date{\n\n}\n\n.news .news_full{\n\n}\n\n.news .news_img {\n  float: left;\n}\n\n/*For windows*/\n\n.window{\n  width: 500px;\n  height: auto;\n  position: absolute;\n  left: calc(50% - 250px);\n  top: 100px;\n  background-color: #fff;\n\n}\n\n.auth_window{\n  width: 300px;\n  height: auto;\n  position: absolute;\n  left: calc(50% - 150px);\n  top: 100px;\n  background-color: #fff;\n\n}\n\n.auth_error {\n  font-family: 'Raleway', sans-serif;\n  color: red;\n  text-align: center;\n}\n\n.auth_window-header{\n  padding: 0 10px;\n  height: 40px;\n  line-height: 40px;\n  background-color: #eee;\n  font-weight: bold;\n  font-family: 'Raleway', sans-serif;\n  color: #325c8e;\n}\n\n.auth_window-main{\n  width: 100%;\n  height: auto;\n  box-sizing: border-box;\n  padding: 10px 20px;\n  display: inline-flex;\n  flex-flow: column nowrap;\n}\n\n.auth_window-main .form-group {\n  display: inline-flex;\n  flex-flow: column nowrap;\n}\n\n.auth_window-main .form-group {\n  display: inline-flex;\n  flex-flow: column nowrap;\n}\n\n.auth_remember_me_block {\n  display: inline-flex;\n  flex-flow: row nowrap;\n  justify-content: start;\n  align-items: center;\n}\n\n.form-group label{\n  font-size: 0.8em;\n  font-family: 'Roboto', sans-serif;\n  margin-bottom: 5px;\n}\n\n.auth_remember_me_block label {\n  margin-bottom: 0;\n  margin-right: 10px;\n}\n\n.auth_window .auth_window-footer{\n  width: 100%;\n  padding: 0 10px;\n  box-sizing: border-box;\n  background-color: #eee;\n  display: inline-flex;\n  flex-flow: row;\n  justify-content: space-between;\n}\n\n.auth_window_btn_block{\n  display: inline-flex;\n  flex-flow: row nowrap;\n  margin-left: 10px;\n}\n\n.auth_window_redirect_block{\n  margin: 5px 5px 5px 0;\n  height: 30px;\n  line-height: 30px;\n  text-align: center;\n  font-size: small;\n}\n\n.auth_window_redirect_block span{\n  cursor: pointer;\n  color: #1d4ebe;\n}\n\n.auth_window_btn_block .wnd-btn {\n  margin: 5px 5px 5px 0;\n  height: 30px;\n  line-height: 30px;\n  background-color: #a5d7ff;\n  color: white;\n  cursor: pointer;\n  padding: 0 10px;\n  border: 1px solid rgba(0,0,0,.1);\n  border-radius: 2px;\n  transition: all .218s ease 0s;\n}\n\n.window-header{\n  padding: 0 20px;\n  height: 50px;\n  line-height: 50px;\n  background-color: #eee;\n  font-weight: bold;\n  font-family: 'Raleway', sans-serif;\n  color: #325c8e;\n}\n\n.window-main{\n  width: 100%;\n  height: auto;\n  box-sizing: border-box;\n  padding: 10px 20px;\n  display: inline-flex;\n  flex-flow: column nowrap;\n}\n\n.window dl{\n  margin: 0;\n}\n\n.window dt{\n  font-family: 'Open Sans Condensed', sans-serif;\n  font-size: larger;\n  margin-bottom: 5px;\n}\n\n.window dt span{\n  font-weight: bold;\n}\n\n.window input{\n  width: 100%;\n}\n\n.window .window-footer{\n  padding: 10px 20px;\n  background-color: #eee;\n}\n\n.wnd-btn {\n  margin-right: 10px;\n  height: 40px;\n  line-height: 40px;\n  background-color: #a5d7ff;\n  color: white;\n  cursor: pointer;\n  padding: 0 10px;\n  border: 1px solid rgba(0,0,0,.1);\n  border-radius: 2px;\n  transition: all .218s ease 0s;\n}\n\n.add {\n  height: 20px;\n  width: 30px;\n  text-align: center;\n  line-height: 20px;\n  margin-top: 5px;\n  padding: 0;\n}\n\n.remove {\n  height: 20px;\n  width: 30px;\n  text-align: center;\n  line-height: 20px;\n  margin-left: 5px;\n  padding: 0;\n}\n\n.wnd-btn:hover{\n  background-color: #86b0d3;\n}\n\n.fade{\n  position: fixed;\n  height: 100%;\n  z-index: 2222;\n  background-color: rgba(0,0,0,0.5);\n  left: 0;\n  top: 0;\n  bottom: 0;\n  right: 0;\n}\n\n.validation_error{\n  color: red;\n  font-size: small;\n}\n\n.not_required_info{\n  font-size: small;\n  color: #86b0d3;\n}\n\n/* Admin */\n\n.admin_block_header {\n  font-family: 'Oswald', sans-serif;\n  width: 100%;\n  margin: 10px 0;\n  padding: 10px;\n  font-size: large;\n}\n\n.admin-content-form {\n  display: inline-flex;\n  flex-flow: row nowrap;\n  padding: 5px;\n  box-sizing: border-box;\n  justify-content: space-between;\n  width: 100%;\n}\n\n.form-group {\n  margin-bottom: 5px;\n  display: inline-flex;\n  flex-flow: column nowrap;\n}\n\n.form-group-unit{\n  display: inline-flex;\n  flex-flow: column nowrap;\n  margin-bottom: 3px;\n}\n\n.form_group_unit_imput_btn_block{\n  display: inline-flex;\n  flex-flow: row;\n}\n\n.array_validation_error{\n  width: 100%;\n}\n\n.admin_content_input {\n  width: 150px;\n}\n\n.admin_content_input[type='number'] {\n  width: 50px;\n}\n\n.choosenImg {\n  width: 30%;\n  height: 30%;\n}\n\n.info_message{\n  padding: 5px;\n  margin: 5px 0;\n  border: 1px solid #124071;\n  color: #124071;\n  width: 100%;\n  box-sizing: border-box;\n  font-weight: bolder;\n  border-radius: 3px;\n}\n\n.admin_content_block_label{\n  margin-bottom: 5px;\n}\n\n.admin_block_header {\n  width: 100%;\n  margin: 10px 0;\n  padding: 10px;\n  font-size: large;\n  color: #505050;\n  font-weight: bold;\n}\n\n.admin_block_header_small {\n  width: 100%;\n  margin: 10px 0;\n  padding: 10px;\n  color: #505050;\n  font-weight: bold;\n  border-bottom: 1px solid rgba(0,0,0,.1);\n  box-sizing: border-box;\n}\n\n.form-group-images-block{\n  display: inline-flex;\n  flex-flow: row nowrap;\n  justify-content: flex-start;\n}\n\n.admin_block_min_image{\n  width: 100px;\n  height: auto;\n  cursor: pointer;\n}\n\nagm-map{\n  width: 500px;\n  height: 400px;\n}\n\n\n/*# sourceMappingURL=data:application/json;base64,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O0VBQ1osYUFBYTtBQUNmIiwiZmlsZSI6InNyYy9zdHlsZXMuY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLyogWW91IGNhbiBhZGQgZ2xvYmFsIHN0eWxlcyB0byB0aGlzIGZpbGUsIGFuZCBhbHNvIGltcG9ydCBvdGhlciBzdHlsZSBmaWxlcyAqL1xuXG4qe1xuICBtYXJnaW46IDA7XG4gIHBhZGRpbmc6IDA7XG59XG4uY29udGFpbmVye1xuICB3aWR0aDogMTAwJTtcbiAgbWFyZ2luOiAwIGF1dG87XG4gIGJhY2tncm91bmQtaW1hZ2U6IHVybCgnaHR0cDovL215ZG9tYWluL2ltZy9iZ2Mvd2hpdGVfd2FsbF9oYXNoLnBuZycpO1xuICBkaXNwbGF5OiBpbmxpbmUtZmxleDtcbiAgZmxleC1mbG93OiBjb2x1bW47XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG59XG4ud3JhcHBlcntcbiAgYm9yZGVyLXJhZGl1czogNXB4O1xuICBtYXJnaW46IDEwcHggMDtcbiAgd2lkdGg6IDgwJTtcbiAgYmFja2dyb3VuZC1pbWFnZTogdXJsKCdodHRwOi8vbXlkb21haW4vaW1nL2JnYy9jb25jcmV0ZV9zZWFtbGVzcy5wbmcnKTtcbiAgZGlzcGxheTogaW5saW5lLWZsZXg7XG4gIGZsZXgtZmxvdzogcm93O1xufVxuaGVhZGVyLCBmb290ZXJ7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZmY7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IGF1dG87XG59XG5mb290ZXIge1xuICBkaXNwbGF5OiBpbmxpbmUtZmxleDtcbiAgZmxleC1mbG93OiByb3cgbm93cmFwO1xuICBib3JkZXItdG9wOiAxcHggc29saWQgI0MwQzBDMDtcbiAgYm9yZGVyLWJvdHRvbTogMXB4IHNvbGlkICNDMEMwQzA7XG59XG5cbi8qIE1haW4qL1xuLm1haW5fY29udGVudHtcbiAgd2lkdGg6IDEwMCU7XG4gIGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICBmbGV4LWZsb3c6IHJvdyB3cmFwO1xuICBib3JkZXI6IDFweCBzb2xpZCByZ2JhKDAsMCwwLC4xKTtcbiAgcGFkZGluZzogNXB4O1xufVxuLm1haW5fY29udGVudF9oZWFkZXJ7XG4gIHdpZHRoOiAxMDAlO1xuICBwYWRkaW5nOiAwIDAgMTBweCAwO1xuICBmb250LXNpemU6IDEuNWVtO1xuICBjb2xvcjogIzUwNTA1MDtcbiAgZm9udC1mYW1pbHk6ICdPc3dhbGQnLCBzYW5zLXNlcmlmO1xuXG59XG4ucHJvZHVjdHNfdW5pdF9oZWFkZXJ7XG4gIGZvbnQtc2l6ZTogMmVtO1xuICB3aWR0aDogMTAwJTtcbiAgcGFkZGluZzogMCAwIDEwcHggMDtcbiAgYmFja2dyb3VuZC1pbWFnZTogdXJsKCdodHRwOi8vbXlkb21haW4vaW1nL2JnYy93aGl0ZV93YWxsX2hhc2gucG5nJyk7XG4gIGNvbG9yOiAjNTA1MDUwO1xuICBmb250LWZhbWlseTogJ09zd2FsZCcsIHNhbnMtc2VyaWY7XG4gIGZvbnQtd2VpZ2h0OiBib2xkO1xufVxuLm1haW5fbmF2e1xuICBoZWlnaHQ6IGF1dG87XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZmY7XG4gIG1hcmdpbi1ib3R0b206IDEwcHg7XG4gIGJvcmRlcjogMXB4IHNvbGlkIHJnYmEoMCwwLDAsLjEpO1xufVxuLm1haW5fY29udGVudF9sZWZ0e1xuICB3aWR0aDogMzAlO1xufVxuLm1haW5fY29udGVudF9yaWdodHtcbiAgd2lkdGg6IDcwJTtcbiAgYm9yZGVyOiAxcHggc29saWQgI0MwQzBDMDtcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgYm94LXNoYWRvdzogMCA1cHggNXB4IDAgcmdiYSgwLDAsMCwgLjIpO1xufVxuXG5idXR0b24ge1xuXG59XG4vKiBNYWluIGNvbnRlbnQgbmF2ICovXG5cbi5tYWluX25hdiB1bHtcbiAgd2lkdGg6IDEwMCU7XG4gIGxpc3Qtc3R5bGU6IG5vbmU7XG4gIHBhZGRpbmc6IDVweDtcbiAgZGlzcGxheTogaW5saW5lLWZsZXg7XG4gIGZsZXgtZmxvdzogcm93IG5vd3JhcDtcbiAganVzdGlmeS1jb250ZW50OiBzcGFjZS1hcm91bmQ7XG59XG4ubWFpbl9uYXYgdWwgbGl7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgd2lkdGg6IGF1dG87XG59XG4ubWFpbl9uYXYgdWwgbGkgYXtcbiAgY29sb3I6ICMzMjVjOGU7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICB3aWR0aDogMTAwJTtcbiAgdGV4dC1hbGlnbjogY2VudGVyO1xuICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gIGhlaWdodDogMzBweDtcbiAgbGluZS1oZWlnaHQ6IDMwcHg7XG4gIGZvbnQtZmFtaWx5OiAnU2NhZGEnLCBzYW5zLXNlcmlmO1xufVxuLm1haW5fbmF2IHVsIGxpIGE6aG92ZXIge1xuICAgdHJhbnNpdGlvbjogMC41cztcbiAgIGNvbG9yOiAjNTA1MDUwO1xufVxuXG4vKiBNYWluIGxlZnQgbGlzdCAqL1xuLm5ld3NfbGlzdCB7XG4gIGxpc3Qtc3R5bGU6IG5vbmU7XG59XG4ubmV3c19saXN0IGxpIHtcbiAgZGlzcGxheTogaW5saW5lLWZsZXg7XG4gIGZsZXgtZmxvdzogY29sdW1uIG5vd3JhcDtcbn1cbi5uZXdzX2xpc3QgbGkgLm5ld3NfbmFtZSB7XG4gIGNvbG9yOiAjNDE3ZGJlO1xufVxuLm5ld3NfbGlzdCBsaSAubmV3c19zaG9ydCB7XG4gIGNvbG9yOiBibGFjaztcbiAgZm9udC1zaXplOiBzbWFsbDtcbn1cbi8qcHJvZHVjdGlvbiBieSAtIGxpc3QqL1xuLnByb2R1Y3Rpb25fYnlfbGlzdHtcbiAgbGlzdC1zdHlsZTogbm9uZTtcbiAgcGFkZGluZzogNXB4O1xufVxuLnByb2R1Y3Rpb25fYnlfbGlzdF91bml0e1xuICBjb2xvcjogIzQxN2RiZTtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuLnByb2R1Y3RzX2J5X2xpc3RfcHJvZHVjdHMge1xuICBsaXN0LXN0eWxlOiBub25lO1xuICBtYXJnaW46IDVweDtcbn1cbi5wcm9kdWN0c19ieV9saXN0X3Byb2R1Y3R7XG4gIGZvbnQtc2l6ZTogc21hbGw7XG4gIGNvbG9yOiAjMWQ0ZWJlO1xuICBjdXJzb3I6IHBvaW50ZXI7XG59XG4ucHJvZHVjdF9ibG9ja3tcbiAgd2lkdGg6IDEwMCU7XG4gIHBhZGRpbmc6IDVweDtcbiAgZGlzcGxheTogaW5saW5lLWZsZXg7XG4gIGZsZXgtZmxvdzogY29sdW1uIG5vd3JhcDtcbn1cbi5wcm9kdWN0X2Jsb2NrX2ltZ19uYW1le1xuICB3aWR0aDogMTAwJTtcbiAgZGlzcGxheTogaW5saW5lLWZsZXg7XG4gIGZsZXgtZmxvdzogcm93IG5vd3JhcDtcbn1cbi5wcm9kdWN0X2Jsb2NrX2ltZyBpbWd7XG4gIHdpZHRoOiAyMDBweDtcbiAgaGVpZ2h0OiBhdXRvO1xufVxuLnByb2R1Y3RfYmxvY2tfbmFtZXtcbiAgZm9udC1mYW1pbHk6ICdSb2JvdG8nLCBzYW5zLXNlcmlmO1xuICBjb2xvcjogIzUwNTA1MDtcbiAgbWFyZ2luOiA1cHggMCAxMHB4IDA7XG4gIHdpZHRoOiAxMDAlO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIGZvbnQtc2l6ZTogMjhweDtcbn1cbi5wcm9kdWN0X2Jsb2NrX3RlY2hfaW5mb3tcbiAgZm9udC1mYW1pbHk6ICdSb2JvdG8nLCBzYW5zLXNlcmlmO1xuICBjb2xvcjogIzUwNTA1MDtcbn1cblxuXG4vKiBNYWluIHJpZ2h0ICovXG5cbi5tYWluX3JpZ2h0X2hlYWRlciB7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgZm9udC1zaXplOiBsYXJnZXI7XG4gIGZvbnQtZmFtaWx5OiAnT3N3YWxkJywgc2Fucy1zZXJpZjtcbiAgd2lkdGg6IDEwMCU7XG4gIG1hcmdpbjogMTBweCAwO1xuICBwYWRkaW5nOiAxMHB4O1xuICBjb2xvcjogIzUwNTA1MDtcbn1cbi5tYWluX3JpZ2h0X3VuaXRfaGVhZGVyIHtcbiAgZm9udC1mYW1pbHk6ICdPc3dhbGQnLCBzYW5zLXNlcmlmO1xuICB3aWR0aDogMTAwJTtcbiAgbWFyZ2luOiAxMHB4IDA7XG4gIHBhZGRpbmc6IDEwcHg7XG4gIGNvbG9yOiAjNzI3MjcyO1xufVxuLyogTWFpbiByaWdodCBuZXdzKi9cblxuLm5ld3N7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICBmbGV4LWZsb3c6IGNvbHVtbjtcbiAgd2lkdGg6IDEwMCU7XG59XG4ubmV3cyAubmV3c19uYW1le1xuICB3aWR0aDogMTAwJTtcbiAgdGV4dC1hbGlnbjogY2VudGVyO1xufVxuLm5ld3MgLm5ld3NfZGF0ZXtcblxufVxuLm5ld3MgLm5ld3NfZnVsbHtcblxufVxuLm5ld3MgLm5ld3NfaW1nIHtcbiAgZmxvYXQ6IGxlZnQ7XG59XG5cbi8qRm9yIHdpbmRvd3MqL1xuXG4ud2luZG93e1xuICB3aWR0aDogNTAwcHg7XG4gIGhlaWdodDogYXV0bztcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICBsZWZ0OiBjYWxjKDUwJSAtIDI1MHB4KTtcbiAgdG9wOiAxMDBweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcblxufVxuLmF1dGhfd2luZG93e1xuICB3aWR0aDogMzAwcHg7XG4gIGhlaWdodDogYXV0bztcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICBsZWZ0OiBjYWxjKDUwJSAtIDE1MHB4KTtcbiAgdG9wOiAxMDBweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcblxufVxuLmF1dGhfZXJyb3Ige1xuICBmb250LWZhbWlseTogJ1JhbGV3YXknLCBzYW5zLXNlcmlmO1xuICBjb2xvcjogcmVkO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG59XG4uYXV0aF93aW5kb3ctaGVhZGVye1xuICBwYWRkaW5nOiAwIDEwcHg7XG4gIGhlaWdodDogNDBweDtcbiAgbGluZS1oZWlnaHQ6IDQwcHg7XG4gIGJhY2tncm91bmQtY29sb3I6ICNlZWU7XG4gIGZvbnQtd2VpZ2h0OiBib2xkO1xuICBmb250LWZhbWlseTogJ1JhbGV3YXknLCBzYW5zLXNlcmlmO1xuICBjb2xvcjogIzMyNWM4ZTtcbn1cbi5hdXRoX3dpbmRvdy1tYWlue1xuICB3aWR0aDogMTAwJTtcbiAgaGVpZ2h0OiBhdXRvO1xuICBib3gtc2l6aW5nOiBib3JkZXItYm94O1xuICBwYWRkaW5nOiAxMHB4IDIwcHg7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICBmbGV4LWZsb3c6IGNvbHVtbiBub3dyYXA7XG59XG4uYXV0aF93aW5kb3ctbWFpbiAuZm9ybS1ncm91cCB7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICBmbGV4LWZsb3c6IGNvbHVtbiBub3dyYXA7XG59XG4uYXV0aF93aW5kb3ctbWFpbiAuZm9ybS1ncm91cCB7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICBmbGV4LWZsb3c6IGNvbHVtbiBub3dyYXA7XG59XG4uYXV0aF9yZW1lbWJlcl9tZV9ibG9jayB7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICBmbGV4LWZsb3c6IHJvdyBub3dyYXA7XG4gIGp1c3RpZnktY29udGVudDogc3RhcnQ7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG59XG4uZm9ybS1ncm91cCBsYWJlbHtcbiAgZm9udC1zaXplOiAwLjhlbTtcbiAgZm9udC1mYW1pbHk6ICdSb2JvdG8nLCBzYW5zLXNlcmlmO1xuICBtYXJnaW4tYm90dG9tOiA1cHg7XG59XG4uYXV0aF9yZW1lbWJlcl9tZV9ibG9jayBsYWJlbCB7XG4gIG1hcmdpbi1ib3R0b206IDA7XG4gIG1hcmdpbi1yaWdodDogMTBweDtcbn1cbi5hdXRoX3dpbmRvdyAuYXV0aF93aW5kb3ctZm9vdGVye1xuICB3aWR0aDogMTAwJTtcbiAgcGFkZGluZzogMCAxMHB4O1xuICBib3gtc2l6aW5nOiBib3JkZXItYm94O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZWVlO1xuICBkaXNwbGF5OiBpbmxpbmUtZmxleDtcbiAgZmxleC1mbG93OiByb3c7XG4gIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2Vlbjtcbn1cbi5hdXRoX3dpbmRvd19idG5fYmxvY2t7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICBmbGV4LWZsb3c6IHJvdyBub3dyYXA7XG4gIG1hcmdpbi1sZWZ0OiAxMHB4O1xufVxuLmF1dGhfd2luZG93X3JlZGlyZWN0X2Jsb2Nre1xuICBtYXJnaW46IDVweCA1cHggNXB4IDA7XG4gIGhlaWdodDogMzBweDtcbiAgbGluZS1oZWlnaHQ6IDMwcHg7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgZm9udC1zaXplOiBzbWFsbDtcbn1cbi5hdXRoX3dpbmRvd19yZWRpcmVjdF9ibG9jayBzcGFue1xuICBjdXJzb3I6IHBvaW50ZXI7XG4gIGNvbG9yOiAjMWQ0ZWJlO1xufVxuLmF1dGhfd2luZG93X2J0bl9ibG9jayAud25kLWJ0biB7XG4gIG1hcmdpbjogNXB4IDVweCA1cHggMDtcbiAgaGVpZ2h0OiAzMHB4O1xuICBsaW5lLWhlaWdodDogMzBweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2E1ZDdmZjtcbiAgY29sb3I6IHdoaXRlO1xuICBjdXJzb3I6IHBvaW50ZXI7XG4gIHBhZGRpbmc6IDAgMTBweDtcbiAgYm9yZGVyOiAxcHggc29saWQgcmdiYSgwLDAsMCwuMSk7XG4gIGJvcmRlci1yYWRpdXM6IDJweDtcbiAgdHJhbnNpdGlvbjogYWxsIC4yMThzIGVhc2UgMHM7XG59XG5cbi53aW5kb3ctaGVhZGVye1xuICBwYWRkaW5nOiAwIDIwcHg7XG4gIGhlaWdodDogNTBweDtcbiAgbGluZS1oZWlnaHQ6IDUwcHg7XG4gIGJhY2tncm91bmQtY29sb3I6ICNlZWU7XG4gIGZvbnQtd2VpZ2h0OiBib2xkO1xuICBmb250LWZhbWlseTogJ1JhbGV3YXknLCBzYW5zLXNlcmlmO1xuICBjb2xvcjogIzMyNWM4ZTtcbn1cbi53aW5kb3ctbWFpbntcbiAgd2lkdGg6IDEwMCU7XG4gIGhlaWdodDogYXV0bztcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgcGFkZGluZzogMTBweCAyMHB4O1xuICBkaXNwbGF5OiBpbmxpbmUtZmxleDtcbiAgZmxleC1mbG93OiBjb2x1bW4gbm93cmFwO1xufVxuLndpbmRvdyBkbHtcbiAgbWFyZ2luOiAwO1xufVxuLndpbmRvdyBkdHtcbiAgZm9udC1mYW1pbHk6ICdPcGVuIFNhbnMgQ29uZGVuc2VkJywgc2Fucy1zZXJpZjtcbiAgZm9udC1zaXplOiBsYXJnZXI7XG4gIG1hcmdpbi1ib3R0b206IDVweDtcbn1cbi53aW5kb3cgZHQgc3BhbntcbiAgZm9udC13ZWlnaHQ6IGJvbGQ7XG59XG4ud2luZG93IGlucHV0e1xuICB3aWR0aDogMTAwJTtcbn1cbi53aW5kb3cgLndpbmRvdy1mb290ZXJ7XG4gIHBhZGRpbmc6IDEwcHggMjBweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2VlZTtcbn1cbi53bmQtYnRuIHtcbiAgbWFyZ2luLXJpZ2h0OiAxMHB4O1xuICBoZWlnaHQ6IDQwcHg7XG4gIGxpbmUtaGVpZ2h0OiA0MHB4O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjYTVkN2ZmO1xuICBjb2xvcjogd2hpdGU7XG4gIGN1cnNvcjogcG9pbnRlcjtcbiAgcGFkZGluZzogMCAxMHB4O1xuICBib3JkZXI6IDFweCBzb2xpZCByZ2JhKDAsMCwwLC4xKTtcbiAgYm9yZGVyLXJhZGl1czogMnB4O1xuICB0cmFuc2l0aW9uOiBhbGwgLjIxOHMgZWFzZSAwcztcbn1cbi5hZGQge1xuICBoZWlnaHQ6IDIwcHg7XG4gIHdpZHRoOiAzMHB4O1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIGxpbmUtaGVpZ2h0OiAyMHB4O1xuICBtYXJnaW4tdG9wOiA1cHg7XG4gIHBhZGRpbmc6IDA7XG59XG4ucmVtb3ZlIHtcbiAgaGVpZ2h0OiAyMHB4O1xuICB3aWR0aDogMzBweDtcbiAgdGV4dC1hbGlnbjogY2VudGVyO1xuICBsaW5lLWhlaWdodDogMjBweDtcbiAgbWFyZ2luLWxlZnQ6IDVweDtcbiAgcGFkZGluZzogMDtcbn1cbi53bmQtYnRuOmhvdmVye1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjODZiMGQzO1xufVxuLmZhZGV7XG4gIHBvc2l0aW9uOiBmaXhlZDtcbiAgaGVpZ2h0OiAxMDAlO1xuICB6LWluZGV4OiAyMjIyO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsMCwwLDAuNSk7XG4gIGxlZnQ6IDA7XG4gIHRvcDogMDtcbiAgYm90dG9tOiAwO1xuICByaWdodDogMDtcbn1cblxuLnZhbGlkYXRpb25fZXJyb3J7XG4gIGNvbG9yOiByZWQ7XG4gIGZvbnQtc2l6ZTogc21hbGw7XG59XG5cbi5ub3RfcmVxdWlyZWRfaW5mb3tcbiAgZm9udC1zaXplOiBzbWFsbDtcbiAgY29sb3I6ICM4NmIwZDM7XG59XG5cbi8qIEFkbWluICovXG4uYWRtaW5fYmxvY2tfaGVhZGVyIHtcbiAgZm9udC1mYW1pbHk6ICdPc3dhbGQnLCBzYW5zLXNlcmlmO1xuICB3aWR0aDogMTAwJTtcbiAgbWFyZ2luOiAxMHB4IDA7XG4gIHBhZGRpbmc6IDEwcHg7XG4gIGZvbnQtc2l6ZTogbGFyZ2U7XG59XG4uYWRtaW4tY29udGVudC1mb3JtIHtcbiAgZGlzcGxheTogaW5saW5lLWZsZXg7XG4gIGZsZXgtZmxvdzogcm93IG5vd3JhcDtcbiAgcGFkZGluZzogNXB4O1xuICBib3gtc2l6aW5nOiBib3JkZXItYm94O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG4gIHdpZHRoOiAxMDAlO1xufVxuLmZvcm0tZ3JvdXAge1xuICBtYXJnaW4tYm90dG9tOiA1cHg7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICBmbGV4LWZsb3c6IGNvbHVtbiBub3dyYXA7XG59XG4uZm9ybS1ncm91cC11bml0e1xuICBkaXNwbGF5OiBpbmxpbmUtZmxleDtcbiAgZmxleC1mbG93OiBjb2x1bW4gbm93cmFwO1xuICBtYXJnaW4tYm90dG9tOiAzcHg7XG59XG4uZm9ybV9ncm91cF91bml0X2ltcHV0X2J0bl9ibG9ja3tcbiAgZGlzcGxheTogaW5saW5lLWZsZXg7XG4gIGZsZXgtZmxvdzogcm93O1xufVxuLmFycmF5X3ZhbGlkYXRpb25fZXJyb3J7XG4gIHdpZHRoOiAxMDAlO1xufVxuLmFkbWluX2NvbnRlbnRfaW5wdXQge1xuICB3aWR0aDogMTUwcHg7XG59XG4uYWRtaW5fY29udGVudF9pbnB1dFt0eXBlPSdudW1iZXInXSB7XG4gIHdpZHRoOiA1MHB4O1xufVxuLmNob29zZW5JbWcge1xuICB3aWR0aDogMzAlO1xuICBoZWlnaHQ6IDMwJTtcbn1cbi5pbmZvX21lc3NhZ2V7XG4gIHBhZGRpbmc6IDVweDtcbiAgbWFyZ2luOiA1cHggMDtcbiAgYm9yZGVyOiAxcHggc29saWQgIzEyNDA3MTtcbiAgY29sb3I6ICMxMjQwNzE7XG4gIHdpZHRoOiAxMDAlO1xuICBib3gtc2l6aW5nOiBib3JkZXItYm94O1xuICBmb250LXdlaWdodDogYm9sZGVyO1xuICBib3JkZXItcmFkaXVzOiAzcHg7XG59XG4uYWRtaW5fY29udGVudF9ibG9ja19sYWJlbHtcbiAgbWFyZ2luLWJvdHRvbTogNXB4O1xufVxuLmFkbWluX2Jsb2NrX2hlYWRlciB7XG4gIHdpZHRoOiAxMDAlO1xuICBtYXJnaW46IDEwcHggMDtcbiAgcGFkZGluZzogMTBweDtcbiAgZm9udC1zaXplOiBsYXJnZTtcbiAgY29sb3I6ICM1MDUwNTA7XG4gIGZvbnQtd2VpZ2h0OiBib2xkO1xufVxuLmFkbWluX2Jsb2NrX2hlYWRlcl9zbWFsbCB7XG4gIHdpZHRoOiAxMDAlO1xuICBtYXJnaW46IDEwcHggMDtcbiAgcGFkZGluZzogMTBweDtcbiAgY29sb3I6ICM1MDUwNTA7XG4gIGZvbnQtd2VpZ2h0OiBib2xkO1xuICBib3JkZXItYm90dG9tOiAxcHggc29saWQgcmdiYSgwLDAsMCwuMSk7XG4gIGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG59XG4uZm9ybS1ncm91cC1pbWFnZXMtYmxvY2t7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICBmbGV4LWZsb3c6IHJvdyBub3dyYXA7XG4gIGp1c3RpZnktY29udGVudDogZmxleC1zdGFydDtcbn1cbi5hZG1pbl9ibG9ja19taW5faW1hZ2V7XG4gIHdpZHRoOiAxMDBweDtcbiAgaGVpZ2h0OiBhdXRvO1xuICBjdXJzb3I6IHBvaW50ZXI7XG59XG5hZ20tbWFwe1xuICB3aWR0aDogNTAwcHg7XG4gIGhlaWdodDogNDAwcHg7XG59XG5cbiJdfQ== */", '', '']]

/***/ }),

/***/ "./node_modules/style-loader/lib/addStyles.js":
/*!****************************************************!*\
  !*** ./node_modules/style-loader/lib/addStyles.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/

var stylesInDom = {};

var	memoize = function (fn) {
	var memo;

	return function () {
		if (typeof memo === "undefined") memo = fn.apply(this, arguments);
		return memo;
	};
};

var isOldIE = memoize(function () {
	// Test for IE <= 9 as proposed by Browserhacks
	// @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
	// Tests for existence of standard globals is to allow style-loader
	// to operate correctly into non-standard environments
	// @see https://github.com/webpack-contrib/style-loader/issues/177
	return window && document && document.all && !window.atob;
});

var getTarget = function (target, parent) {
  if (parent){
    return parent.querySelector(target);
  }
  return document.querySelector(target);
};

var getElement = (function (fn) {
	var memo = {};

	return function(target, parent) {
                // If passing function in options, then use it for resolve "head" element.
                // Useful for Shadow Root style i.e
                // {
                //   insertInto: function () { return document.querySelector("#foo").shadowRoot }
                // }
                if (typeof target === 'function') {
                        return target();
                }
                if (typeof memo[target] === "undefined") {
			var styleTarget = getTarget.call(this, target, parent);
			// Special case to return head of iframe instead of iframe itself
			if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
				try {
					// This will throw an exception if access to iframe is blocked
					// due to cross-origin restrictions
					styleTarget = styleTarget.contentDocument.head;
				} catch(e) {
					styleTarget = null;
				}
			}
			memo[target] = styleTarget;
		}
		return memo[target]
	};
})();

var singleton = null;
var	singletonCounter = 0;
var	stylesInsertedAtTop = [];

var	fixUrls = __webpack_require__(/*! ./urls */ "./node_modules/style-loader/lib/urls.js");

module.exports = function(list, options) {
	if (typeof DEBUG !== "undefined" && DEBUG) {
		if (typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
	}

	options = options || {};

	options.attrs = typeof options.attrs === "object" ? options.attrs : {};

	// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
	// tags it will allow on a page
	if (!options.singleton && typeof options.singleton !== "boolean") options.singleton = isOldIE();

	// By default, add <style> tags to the <head> element
        if (!options.insertInto) options.insertInto = "head";

	// By default, add <style> tags to the bottom of the target
	if (!options.insertAt) options.insertAt = "bottom";

	var styles = listToStyles(list, options);

	addStylesToDom(styles, options);

	return function update (newList) {
		var mayRemove = [];

		for (var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];

			domStyle.refs--;
			mayRemove.push(domStyle);
		}

		if(newList) {
			var newStyles = listToStyles(newList, options);
			addStylesToDom(newStyles, options);
		}

		for (var i = 0; i < mayRemove.length; i++) {
			var domStyle = mayRemove[i];

			if(domStyle.refs === 0) {
				for (var j = 0; j < domStyle.parts.length; j++) domStyle.parts[j]();

				delete stylesInDom[domStyle.id];
			}
		}
	};
};

function addStylesToDom (styles, options) {
	for (var i = 0; i < styles.length; i++) {
		var item = styles[i];
		var domStyle = stylesInDom[item.id];

		if(domStyle) {
			domStyle.refs++;

			for(var j = 0; j < domStyle.parts.length; j++) {
				domStyle.parts[j](item.parts[j]);
			}

			for(; j < item.parts.length; j++) {
				domStyle.parts.push(addStyle(item.parts[j], options));
			}
		} else {
			var parts = [];

			for(var j = 0; j < item.parts.length; j++) {
				parts.push(addStyle(item.parts[j], options));
			}

			stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
		}
	}
}

function listToStyles (list, options) {
	var styles = [];
	var newStyles = {};

	for (var i = 0; i < list.length; i++) {
		var item = list[i];
		var id = options.base ? item[0] + options.base : item[0];
		var css = item[1];
		var media = item[2];
		var sourceMap = item[3];
		var part = {css: css, media: media, sourceMap: sourceMap};

		if(!newStyles[id]) styles.push(newStyles[id] = {id: id, parts: [part]});
		else newStyles[id].parts.push(part);
	}

	return styles;
}

function insertStyleElement (options, style) {
	var target = getElement(options.insertInto)

	if (!target) {
		throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
	}

	var lastStyleElementInsertedAtTop = stylesInsertedAtTop[stylesInsertedAtTop.length - 1];

	if (options.insertAt === "top") {
		if (!lastStyleElementInsertedAtTop) {
			target.insertBefore(style, target.firstChild);
		} else if (lastStyleElementInsertedAtTop.nextSibling) {
			target.insertBefore(style, lastStyleElementInsertedAtTop.nextSibling);
		} else {
			target.appendChild(style);
		}
		stylesInsertedAtTop.push(style);
	} else if (options.insertAt === "bottom") {
		target.appendChild(style);
	} else if (typeof options.insertAt === "object" && options.insertAt.before) {
		var nextSibling = getElement(options.insertAt.before, target);
		target.insertBefore(style, nextSibling);
	} else {
		throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
	}
}

function removeStyleElement (style) {
	if (style.parentNode === null) return false;
	style.parentNode.removeChild(style);

	var idx = stylesInsertedAtTop.indexOf(style);
	if(idx >= 0) {
		stylesInsertedAtTop.splice(idx, 1);
	}
}

function createStyleElement (options) {
	var style = document.createElement("style");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}

	if(options.attrs.nonce === undefined) {
		var nonce = getNonce();
		if (nonce) {
			options.attrs.nonce = nonce;
		}
	}

	addAttrs(style, options.attrs);
	insertStyleElement(options, style);

	return style;
}

function createLinkElement (options) {
	var link = document.createElement("link");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}
	options.attrs.rel = "stylesheet";

	addAttrs(link, options.attrs);
	insertStyleElement(options, link);

	return link;
}

function addAttrs (el, attrs) {
	Object.keys(attrs).forEach(function (key) {
		el.setAttribute(key, attrs[key]);
	});
}

function getNonce() {
	if (false) {}

	return __webpack_require__.nc;
}

function addStyle (obj, options) {
	var style, update, remove, result;

	// If a transform function was defined, run it on the css
	if (options.transform && obj.css) {
	    result = typeof options.transform === 'function'
		 ? options.transform(obj.css) 
		 : options.transform.default(obj.css);

	    if (result) {
	    	// If transform returns a value, use that instead of the original css.
	    	// This allows running runtime transformations on the css.
	    	obj.css = result;
	    } else {
	    	// If the transform function returns a falsy value, don't add this css.
	    	// This allows conditional loading of css
	    	return function() {
	    		// noop
	    	};
	    }
	}

	if (options.singleton) {
		var styleIndex = singletonCounter++;

		style = singleton || (singleton = createStyleElement(options));

		update = applyToSingletonTag.bind(null, style, styleIndex, false);
		remove = applyToSingletonTag.bind(null, style, styleIndex, true);

	} else if (
		obj.sourceMap &&
		typeof URL === "function" &&
		typeof URL.createObjectURL === "function" &&
		typeof URL.revokeObjectURL === "function" &&
		typeof Blob === "function" &&
		typeof btoa === "function"
	) {
		style = createLinkElement(options);
		update = updateLink.bind(null, style, options);
		remove = function () {
			removeStyleElement(style);

			if(style.href) URL.revokeObjectURL(style.href);
		};
	} else {
		style = createStyleElement(options);
		update = applyToTag.bind(null, style);
		remove = function () {
			removeStyleElement(style);
		};
	}

	update(obj);

	return function updateStyle (newObj) {
		if (newObj) {
			if (
				newObj.css === obj.css &&
				newObj.media === obj.media &&
				newObj.sourceMap === obj.sourceMap
			) {
				return;
			}

			update(obj = newObj);
		} else {
			remove();
		}
	};
}

var replaceText = (function () {
	var textStore = [];

	return function (index, replacement) {
		textStore[index] = replacement;

		return textStore.filter(Boolean).join('\n');
	};
})();

function applyToSingletonTag (style, index, remove, obj) {
	var css = remove ? "" : obj.css;

	if (style.styleSheet) {
		style.styleSheet.cssText = replaceText(index, css);
	} else {
		var cssNode = document.createTextNode(css);
		var childNodes = style.childNodes;

		if (childNodes[index]) style.removeChild(childNodes[index]);

		if (childNodes.length) {
			style.insertBefore(cssNode, childNodes[index]);
		} else {
			style.appendChild(cssNode);
		}
	}
}

function applyToTag (style, obj) {
	var css = obj.css;
	var media = obj.media;

	if(media) {
		style.setAttribute("media", media)
	}

	if(style.styleSheet) {
		style.styleSheet.cssText = css;
	} else {
		while(style.firstChild) {
			style.removeChild(style.firstChild);
		}

		style.appendChild(document.createTextNode(css));
	}
}

function updateLink (link, options, obj) {
	var css = obj.css;
	var sourceMap = obj.sourceMap;

	/*
		If convertToAbsoluteUrls isn't defined, but sourcemaps are enabled
		and there is no publicPath defined then lets turn convertToAbsoluteUrls
		on by default.  Otherwise default to the convertToAbsoluteUrls option
		directly
	*/
	var autoFixUrls = options.convertToAbsoluteUrls === undefined && sourceMap;

	if (options.convertToAbsoluteUrls || autoFixUrls) {
		css = fixUrls(css);
	}

	if (sourceMap) {
		// http://stackoverflow.com/a/26603875
		css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
	}

	var blob = new Blob([css], { type: "text/css" });

	var oldSrc = link.href;

	link.href = URL.createObjectURL(blob);

	if(oldSrc) URL.revokeObjectURL(oldSrc);
}


/***/ }),

/***/ "./node_modules/style-loader/lib/urls.js":
/*!***********************************************!*\
  !*** ./node_modules/style-loader/lib/urls.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {


/**
 * When source maps are enabled, `style-loader` uses a link element with a data-uri to
 * embed the css on the page. This breaks all relative urls because now they are relative to a
 * bundle instead of the current page.
 *
 * One solution is to only use full urls, but that may be impossible.
 *
 * Instead, this function "fixes" the relative urls to be absolute according to the current page location.
 *
 * A rudimentary test suite is located at `test/fixUrls.js` and can be run via the `npm test` command.
 *
 */

module.exports = function (css) {
  // get current location
  var location = typeof window !== "undefined" && window.location;

  if (!location) {
    throw new Error("fixUrls requires window.location");
  }

	// blank or null?
	if (!css || typeof css !== "string") {
	  return css;
  }

  var baseUrl = location.protocol + "//" + location.host;
  var currentDir = baseUrl + location.pathname.replace(/\/[^\/]*$/, "/");

	// convert each url(...)
	/*
	This regular expression is just a way to recursively match brackets within
	a string.

	 /url\s*\(  = Match on the word "url" with any whitespace after it and then a parens
	   (  = Start a capturing group
	     (?:  = Start a non-capturing group
	         [^)(]  = Match anything that isn't a parentheses
	         |  = OR
	         \(  = Match a start parentheses
	             (?:  = Start another non-capturing groups
	                 [^)(]+  = Match anything that isn't a parentheses
	                 |  = OR
	                 \(  = Match a start parentheses
	                     [^)(]*  = Match anything that isn't a parentheses
	                 \)  = Match a end parentheses
	             )  = End Group
              *\) = Match anything and then a close parens
          )  = Close non-capturing group
          *  = Match anything
       )  = Close capturing group
	 \)  = Match a close parens

	 /gi  = Get all matches, not the first.  Be case insensitive.
	 */
	var fixedCss = css.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function(fullMatch, origUrl) {
		// strip quotes (if they exist)
		var unquotedOrigUrl = origUrl
			.trim()
			.replace(/^"(.*)"$/, function(o, $1){ return $1; })
			.replace(/^'(.*)'$/, function(o, $1){ return $1; });

		// already a full url? no change
		if (/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(unquotedOrigUrl)) {
		  return fullMatch;
		}

		// convert the url to a full url
		var newUrl;

		if (unquotedOrigUrl.indexOf("//") === 0) {
		  	//TODO: should we add protocol?
			newUrl = unquotedOrigUrl;
		} else if (unquotedOrigUrl.indexOf("/") === 0) {
			// path should be relative to the base url
			newUrl = baseUrl + unquotedOrigUrl; // already starts with '/'
		} else {
			// path should be relative to current directory
			newUrl = currentDir + unquotedOrigUrl.replace(/^\.\//, ""); // Strip leading './'
		}

		// send back the fixed url(...)
		return "url(" + JSON.stringify(newUrl) + ")";
	});

	// send back the fixed css
	return fixedCss;
};


/***/ }),

/***/ "./src/styles.css":
/*!************************!*\
  !*** ./src/styles.css ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../node_modules/@angular-devkit/build-angular/src/angular-cli-files/plugins/raw-css-loader.js!../node_modules/postcss-loader/src??embedded!./styles.css */ "./node_modules/@angular-devkit/build-angular/src/angular-cli-files/plugins/raw-css-loader.js!./node_modules/postcss-loader/src/index.js?!./src/styles.css");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ 2:
/*!******************************!*\
  !*** multi ./src/styles.css ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Ivan\Desktop\site\marafonNg\marafon\src\styles.css */"./src/styles.css");


/***/ })

},[[2,"runtime"]]]);
//# sourceMappingURL=styles-es2015.js.map