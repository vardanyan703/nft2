(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
var a=this||self;function d(b,m){b=b.split(".");var c=a;b[0]in c||"undefined"==typeof c.execScript||c.execScript("var "+b[0]);for(var e;b.length&&(e=b.shift());)b.length||void 0===m?c[e]&&c[e]!==Object.prototype[e]?c=c[e]:c=c[e]={}:c[e]=m}function f(b){return b};var g={},MSG_TRANSLATE="\u041f\u0435\u0440\u0435\u0432\u0435\u0441\u0442\u0438";g[0]=MSG_TRANSLATE;var MSG_CANCEL="\u041e\u0442\u043c\u0435\u043d\u0438\u0442\u044c";g[1]=MSG_CANCEL;var MSG_CLOSE="\u0417\u0430\u043a\u0440\u044b\u0442\u044c";g[2]=MSG_CLOSE;
function MSGFUNC_PAGE_TRANSLATED_TO(b){return"\u0421\u0438\u0441\u0442\u0435\u043c\u0430 Google \u0430\u0432\u0442\u043e\u043c\u0430\u0442\u0438\u0447\u0435\u0441\u043a\u0438 \u043f\u0435\u0440\u0435\u0432\u0435\u043b\u0430 \u044d\u0442\u0443 \u0441\u0442\u0440\u0430\u043d\u0438\u0446\u0443 \u043d\u0430 "+b}g[3]=MSGFUNC_PAGE_TRANSLATED_TO;function MSGFUNC_TRANSLATED_TO(b){return"\u041f\u0435\u0440\u0435\u0432\u0435\u0434\u0435\u043d\u043e \u043d\u0430 "+b}g[4]=MSGFUNC_TRANSLATED_TO;
var MSG_GENERAL_ERROR="\u041e\u0448\u0438\u0431\u043a\u0430. \u0421\u0435\u0440\u0432\u0435\u0440 \u043d\u0435 \u043c\u043e\u0436\u0435\u0442 \u0432\u044b\u043f\u043e\u043b\u043d\u0438\u0442\u044c \u0432\u0430\u0448 \u0437\u0430\u043f\u0440\u043e\u0441. \u041f\u043e\u0432\u0442\u043e\u0440\u0438\u0442\u0435 \u043f\u043e\u043f\u044b\u0442\u043a\u0443 \u043f\u043e\u0437\u0436\u0435.";g[5]=MSG_GENERAL_ERROR;var MSG_LEARN_MORE="\u041f\u043e\u0434\u0440\u043e\u0431\u043d\u0435\u0435\u2026";g[6]=MSG_LEARN_MORE;
function MSGFUNC_POWERED_BY(b){return"\u0422\u0435\u0445\u043d\u043e\u043b\u043e\u0433\u0438\u0438 "+b}g[7]=MSGFUNC_POWERED_BY;var MSG_TRANSLATE_PRODUCT_NAME="\u041f\u0435\u0440\u0435\u0432\u043e\u0434\u0447\u0438\u043a";g[8]=MSG_TRANSLATE_PRODUCT_NAME;var MSG_TRANSLATION_IN_PROGRESS="\u0412\u044b\u043f\u043e\u043b\u043d\u044f\u0435\u0442\u0441\u044f \u043f\u0435\u0440\u0435\u0432\u043e\u0434";g[9]=MSG_TRANSLATION_IN_PROGRESS;
function MSGFUNC_TRANSLATE_PAGE_TO(b){return"\u041f\u0435\u0440\u0435\u0432\u0435\u0441\u0442\u0438 \u044d\u0442\u0443 \u0441\u0442\u0440\u0430\u043d\u0438\u0446\u0443 \u043d\u0430 "+(b+", \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u044f \u041f\u0435\u0440\u0435\u0432\u043e\u0434\u0447\u0438\u043a Google?")}g[10]=MSGFUNC_TRANSLATE_PAGE_TO;
function MSGFUNC_VIEW_PAGE_IN(b){return"\u041f\u043e\u043a\u0430\u0437\u0430\u0442\u044c \u043f\u0435\u0440\u0435\u0432\u043e\u0434 \u044d\u0442\u043e\u0439 \u0441\u0442\u0440\u0430\u043d\u0438\u0446\u044b \u043d\u0430 "+b}g[11]=MSGFUNC_VIEW_PAGE_IN;var MSG_RESTORE="\u041f\u043e\u043a\u0430\u0437\u0430\u0442\u044c \u0438\u0441\u0445\u043e\u0434\u043d\u044b\u0439 \u0442\u0435\u043a\u0441\u0442";g[12]=MSG_RESTORE;var MSG_SSL_INFO_LOCAL_FILE="\u0421\u043e\u0434\u0435\u0440\u0436\u0430\u043d\u0438\u0435 \u044d\u0442\u043e\u0433\u043e \u043b\u043e\u043a\u0430\u043b\u044c\u043d\u043e\u0433\u043e \u0444\u0430\u0439\u043b\u0430 \u0431\u0443\u0434\u0435\u0442 \u043f\u0435\u0440\u0435\u0434\u0430\u043d\u043e \u0434\u043b\u044f \u043f\u0435\u0440\u0435\u0432\u043e\u0434\u0430 \u0432 Google \u0447\u0435\u0440\u0435\u0437 \u0431\u0435\u0437\u043e\u043f\u0430\u0441\u043d\u043e\u0435 \u0441\u043e\u0435\u0434\u0438\u043d\u0435\u043d\u0438\u0435.";
g[13]=MSG_SSL_INFO_LOCAL_FILE;var MSG_SSL_INFO_SECURE_PAGE="\u0421\u043e\u0434\u0435\u0440\u0436\u0430\u043d\u0438\u0435 \u044d\u0442\u043e\u0439 \u0437\u0430\u0449\u0438\u0449\u0435\u043d\u043d\u043e\u0439 \u0441\u0442\u0440\u0430\u043d\u0438\u0446\u044b \u0431\u0443\u0434\u0435\u0442 \u043f\u0435\u0440\u0435\u0434\u0430\u043d\u043e \u0434\u043b\u044f \u043f\u0435\u0440\u0435\u0432\u043e\u0434\u0430 \u0432 Google \u0447\u0435\u0440\u0435\u0437 \u0431\u0435\u0437\u043e\u043f\u0430\u0441\u043d\u043e\u0435 \u0441\u043e\u0435\u0434\u0438\u043d\u0435\u043d\u0438\u0435.";
g[14]=MSG_SSL_INFO_SECURE_PAGE;var MSG_SSL_INFO_INTRANET_PAGE="\u0421\u043e\u0434\u0435\u0440\u0436\u0430\u043d\u0438\u0435 \u044d\u0442\u043e\u0439 \u0438\u043d\u0442\u0440\u0430\u043d\u0435\u0442-\u0441\u0442\u0440\u0430\u043d\u0438\u0446\u044b \u0431\u0443\u0434\u0435\u0442 \u043f\u0435\u0440\u0435\u0434\u0430\u043d\u043e \u0434\u043b\u044f \u043f\u0435\u0440\u0435\u0432\u043e\u0434\u0430 \u0432 Google \u0447\u0435\u0440\u0435\u0437 \u0431\u0435\u0437\u043e\u043f\u0430\u0441\u043d\u043e\u0435 \u0441\u043e\u0435\u0434\u0438\u043d\u0435\u043d\u0438\u0435.";
g[15]=MSG_SSL_INFO_INTRANET_PAGE;var MSG_SELECT_LANGUAGE="\u0412\u044b\u0431\u0440\u0430\u0442\u044c \u044f\u0437\u044b\u043a";g[16]=MSG_SELECT_LANGUAGE;function MSGFUNC_TURN_OFF_TRANSLATION(b){return"\u041e\u0442\u043a\u043b\u044e\u0447\u0438\u0442\u044c \u043f\u0435\u0440\u0435\u0432\u043e\u0434 \u043d\u0430 "+b}g[17]=MSGFUNC_TURN_OFF_TRANSLATION;
function MSGFUNC_TURN_OFF_FOR(b){return"\u041e\u0442\u043a\u043b\u044e\u0447\u0438\u0442\u044c \u0434\u043b\u044f \u0441\u043b\u0435\u0434\u0443\u044e\u0449\u0435\u0433\u043e \u044f\u0437\u044b\u043a\u0430: "+b}g[18]=MSGFUNC_TURN_OFF_FOR;var MSG_ALWAYS_HIDE_AUTO_POPUP_BANNER="\u0412\u0441\u0435\u0433\u0434\u0430 \u0441\u043a\u0440\u044b\u0432\u0430\u0442\u044c";g[19]=MSG_ALWAYS_HIDE_AUTO_POPUP_BANNER;var MSG_ORIGINAL_TEXT="\u0418\u0441\u0445\u043e\u0434\u043d\u044b\u0439 \u0442\u0435\u043a\u0441\u0442:";
g[20]=MSG_ORIGINAL_TEXT;var MSG_FILL_SUGGESTION="\u041f\u0440\u0435\u0434\u043b\u043e\u0436\u0438\u0442\u044c \u043b\u0443\u0447\u0448\u0438\u0439 \u0432\u0430\u0440\u0438\u0430\u043d\u0442 \u043f\u0435\u0440\u0435\u0432\u043e\u0434\u0430";g[21]=MSG_FILL_SUGGESTION;var MSG_SUBMIT_SUGGESTION="\u041f\u0440\u0435\u0434\u043b\u043e\u0436\u0438\u0442\u044c \u043f\u0435\u0440\u0435\u0432\u043e\u0434";g[22]=MSG_SUBMIT_SUGGESTION;var MSG_SHOW_TRANSLATE_ALL="\u041f\u0435\u0440\u0435\u0432\u0435\u0441\u0442\u0438 \u0432\u0441\u0435";
g[23]=MSG_SHOW_TRANSLATE_ALL;var MSG_SHOW_RESTORE_ALL="\u0412\u043e\u0441\u0441\u0442\u0430\u043d\u043e\u0432\u0438\u0442\u044c \u0432\u0441\u0435";g[24]=MSG_SHOW_RESTORE_ALL;var MSG_SHOW_CANCEL_ALL="\u041e\u0442\u043c\u0435\u043d\u0438\u0442\u044c \u0432\u0441\u0435";g[25]=MSG_SHOW_CANCEL_ALL;var MSG_TRANSLATE_TO_MY_LANGUAGE="\u041f\u0435\u0440\u0435\u0432\u0435\u0441\u0442\u0438 \u0440\u0430\u0437\u0434\u0435\u043b\u044b \u043d\u0430 \u043c\u043e\u0439 \u0440\u043e\u0434\u043d\u043e\u0439 \u044f\u0437\u044b\u043a";
g[26]=MSG_TRANSLATE_TO_MY_LANGUAGE;function MSGFUNC_TRANSLATE_EVERYTHING_TO(b){return"\u041f\u0435\u0440\u0435\u0432\u0435\u0441\u0442\u0438 \u0432\u0441\u0435 \u043d\u0430 "+b}g[27]=MSGFUNC_TRANSLATE_EVERYTHING_TO;var MSG_SHOW_ORIGINAL_LANGUAGES="\u041f\u043e\u043a\u0430\u0437\u0430\u0442\u044c \u0438\u0441\u0445\u043e\u0434\u043d\u044b\u0435 \u044f\u0437\u044b\u043a\u0438";g[28]=MSG_SHOW_ORIGINAL_LANGUAGES;var MSG_OPTIONS="\u041d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438";g[29]=MSG_OPTIONS;
var MSG_TURN_OFF_TRANSLATION_FOR_THIS_SITE="\u041e\u0442\u043a\u043b\u044e\u0447\u0438\u0442\u044c \u043f\u0435\u0440\u0435\u0432\u043e\u0434 \u0434\u043b\u044f \u044d\u0442\u043e\u0433\u043e \u0441\u0430\u0439\u0442\u0430";g[30]=MSG_TURN_OFF_TRANSLATION_FOR_THIS_SITE;g[31]=null;var MSG_ALT_SUGGESTION="\u041f\u043e\u043a\u0430\u0437\u0430\u0442\u044c \u0430\u043b\u044c\u0442\u0435\u0440\u043d\u0430\u0442\u0438\u0432\u043d\u044b\u0439 \u043f\u0435\u0440\u0435\u0432\u043e\u0434";g[32]=MSG_ALT_SUGGESTION;
var MSG_ALT_ACTIVITY_HELPER_TEXT="\u041d\u0430\u0436\u0438\u043c\u0430\u0439\u0442\u0435 \u043d\u0430 \u0441\u043b\u043e\u0432\u0430 \u0432\u044b\u0448\u0435, \u0447\u0442\u043e\u0431\u044b \u0443\u0432\u0438\u0434\u0435\u0442\u044c \u0430\u043b\u044c\u0442\u0435\u0440\u043d\u0430\u0442\u0438\u0432\u043d\u044b\u0435 \u043f\u0435\u0440\u0435\u0432\u043e\u0434\u044b";g[33]=MSG_ALT_ACTIVITY_HELPER_TEXT;var MSG_USE_ALTERNATIVES="\u0418\u0441\u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u044c";
g[34]=MSG_USE_ALTERNATIVES;var MSG_DRAG_TIP="\u0427\u0442\u043e\u0431\u044b \u043f\u0435\u0440\u0435\u0442\u0430\u0449\u0438\u0442\u044c, \u0443\u0434\u0435\u0440\u0436\u0438\u0432\u0430\u0439\u0442\u0435 Shift";g[35]=MSG_DRAG_TIP;var MSG_CLICK_FOR_ALT="\u041d\u0430\u0436\u043c\u0438\u0442\u0435, \u0447\u0442\u043e\u0431\u044b \u0443\u0432\u0438\u0434\u0435\u0442\u044c \u0430\u043b\u044c\u0442\u0435\u0440\u043d\u0430\u0442\u0438\u0432\u043d\u044b\u0435 \u043f\u0435\u0440\u0435\u0432\u043e\u0434\u044b.";
g[36]=MSG_CLICK_FOR_ALT;var MSG_DRAG_INSTUCTIONS="\u0423\u0434\u0435\u0440\u0436\u0438\u0432\u0430\u044f \u043a\u043b\u0430\u0432\u0438\u0448\u0443 Shift, \u043f\u0435\u0440\u0435\u0442\u0430\u0449\u0438\u0442\u0435 \u0441\u043b\u043e\u0432\u0430, \u0447\u0442\u043e\u0431\u044b \u0438\u0437\u043c\u0435\u043d\u0438\u0442\u044c \u0438\u0445 \u043f\u043e\u0440\u044f\u0434\u043e\u043a.";g[37]=MSG_DRAG_INSTUCTIONS;var MSG_SUGGESTION_SUBMITTED="\u0421\u043f\u0430\u0441\u0438\u0431\u043e, \u0447\u0442\u043e \u043f\u0440\u0435\u0434\u043b\u043e\u0436\u0438\u043b\u0438 \u041f\u0435\u0440\u0435\u0432\u043e\u0434\u0447\u0438\u043a\u0443 Google \u0441\u0432\u043e\u0439 \u0432\u0430\u0440\u0438\u0430\u043d\u0442 \u043f\u0435\u0440\u0435\u0432\u043e\u0434\u0430.";
g[38]=MSG_SUGGESTION_SUBMITTED;var MSG_MANAGE_TRANSLATION_FOR_THIS_SITE="\u0423\u043f\u0440\u0430\u0432\u043b\u0435\u043d\u0438\u0435 \u043f\u0435\u0440\u0435\u0432\u043e\u0434\u043e\u043c \u044d\u0442\u043e\u0433\u043e \u0441\u0430\u0439\u0442\u0430";g[39]=MSG_MANAGE_TRANSLATION_FOR_THIS_SITE;var MSG_ALT_AND_CONTRIBUTE_ACTIVITY_HELPER_TEXT="\u041d\u0430\u0436\u043c\u0438\u0442\u0435 \u043d\u0430 \u0441\u043b\u043e\u0432\u043e, \u0447\u0442\u043e\u0431\u044b \u0443\u0432\u0438\u0434\u0435\u0442\u044c \u0430\u043b\u044c\u0442\u0435\u0440\u043d\u0430\u0442\u0438\u0432\u043d\u044b\u0435 \u043f\u0435\u0440\u0435\u0432\u043e\u0434\u044b. \u0418\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439\u0442\u0435 \u0434\u0432\u043e\u0439\u043d\u043e\u0439 \u0449\u0435\u043b\u0447\u043e\u043a, \u0447\u0442\u043e\u0431\u044b \u043e\u0442\u0440\u0435\u0434\u0430\u043a\u0442\u0438\u0440\u043e\u0432\u0430\u0442\u044c \u0442\u0435\u043a\u0441\u0442.";
g[40]=MSG_ALT_AND_CONTRIBUTE_ACTIVITY_HELPER_TEXT;var MSG_ORIGINAL_TEXT_NO_COLON="\u0418\u0441\u0445\u043e\u0434\u043d\u044b\u0439 \u0442\u0435\u043a\u0441\u0442";g[41]=MSG_ORIGINAL_TEXT_NO_COLON;g[42]="\u041f\u0435\u0440\u0435\u0432\u043e\u0434\u0447\u0438\u043a";g[43]="\u041f\u0435\u0440\u0435\u0432\u0435\u0441\u0442\u0438";g[44]="\u0412\u0430\u0448 \u0432\u0430\u0440\u0438\u0430\u043d\u0442 \u043e\u0442\u043f\u0440\u0430\u0432\u043b\u0435\u043d.";var MSG_LANGUAGE_UNSUPPORTED="\u041e\u0448\u0438\u0431\u043a\u0430: \u044f\u0437\u044b\u043a \u0443\u043a\u0430\u0437\u0430\u043d\u043d\u043e\u0439 \u0432\u0435\u0431-\u0441\u0442\u0440\u0430\u043d\u0438\u0446\u044b \u043d\u0435 \u043f\u043e\u0434\u0434\u0435\u0440\u0436\u0438\u0432\u0430\u0435\u0442\u0441\u044f.";
g[45]=MSG_LANGUAGE_UNSUPPORTED;var MSG_LANGUAGE_TRANSLATE_WIDGET="\u042f\u0437\u044b\u043a \u0432\u0438\u0434\u0436\u0435\u0442\u0430 Google \u041f\u0435\u0440\u0435\u0432\u043e\u0434\u0447\u0438\u043a\u0430";g[46]=MSG_LANGUAGE_TRANSLATE_WIDGET;var h;function k(b,m){this.g=m===l?b:""}k.prototype.toString=function(){return this.g+""};var l={};var n=window.google&&google.translate&&google.translate._const;
if(n){var p;a:{for(var q=[],r=[""],t=0;t<r.length;++t){var u=r[t].split(","),v=u[0];if(v){var w=Number(u[1]);if(!(!w||.1<w||0>w)){var x=Number(u[2]),y=new Date,z=1E4*y.getFullYear()+100*(y.getMonth()+1)+y.getDate();!x||x<z||q.push({version:v,ratio:w,h:x})}}}var A=0,B=window.location.href.match(/google\.translate\.element\.random=([\d\.]+)/),C=Number(B&&B[1])||Math.random();for(t=0;t<q.length;++t){var D=q[t];A+=D.ratio;if(1<=A)break;if(C<A){p=D.version;break a}}p="TE_20210503_00"}var E="/element/%s/e/js/element/element_main.js".replace("%s",
p);if("0"==p){var F=" element %s e js element element_main.js".split(" ");F[F.length-1]="main_ru.js";E=F.join("/").replace("%s",p)}if(n._cjlc)n._cjlc(n._pas+n._pah+E);else{var G=n._pas+n._pah+E,H,I="SCRIPT",J=document;I=String(I);"application/xhtml+xml"===J.contentType&&(I=I.toLowerCase());H=J.createElement(I);H.type="text/javascript";H.charset="UTF-8";var K,L;if(void 0===h){var M=null,N=a.trustedTypes;if(N&&N.createPolicy){try{M=N.createPolicy("goog#html",{createHTML:f,createScript:f,createScriptURL:f})}catch(b){a.console&&
a.console.error(b.message)}h=M}else h=M}var O=(L=h)?L.createScriptURL(G):G;K=new k(O,l);H.src=K instanceof k&&K.constructor===k?K.g:"type_error:TrustedResourceUrl";var P,Q,R=(H.ownerDocument&&H.ownerDocument.defaultView||window).document,S=null===(Q=R.querySelector)||void 0===Q?void 0:Q.call(R,"script[nonce]");(P=S?S.nonce||S.getAttribute("nonce")||"":"")&&H.setAttribute("nonce",P);var T=document.getElementsByTagName("head")[0];T||(T=document.body.parentNode.appendChild(document.createElement("head")));
T.appendChild(H)}d("google.translate.m",g);d("google.translate.v",p)};}).call(window)