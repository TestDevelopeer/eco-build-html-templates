(this["webpackJsonpbtw-admin-dashboard"]=this["webpackJsonpbtw-admin-dashboard"]||[]).push([[16],{1033:function(e,t,c){},1079:function(e,t,c){"use strict";c.r(t);var a=c(48),n=c(0),s=c(653),i=c(654),r=c(561),l=c(562),j=c(665),o=c(578),b=c(629),d=c(581),O=c(664),u=c(560),h=c(510),x=c(675),m=c(667),p=c(748),f=c(671),g=c(672),N=c(920),v=c(1041),w=c(1066),C=c(1067),y=c(1068),_=c(1),k=c(62),z=c(119),I=c(34),S=c.n(I),P=c(1062),D=c(892),E=c(635),F=c(636),T=(c(1033),c(11)),U=function(e){var t,c=e.min,s=e.max,i=e.step,r=e.size,l=e.wrap,j=e.value,o=e.style,d=e.upIcon,O=e.disabled,u=e.readonly,x=e.onChange,m=e.downIcon,p=e.vertical,f=e.className,g=e.onDecrement,N=e.onIncrement,v=e.inputClassName,w=Object(z.a)(e,["min","max","step","size","wrap","value","style","upIcon","disabled","readonly","onChange","downIcon","vertical","className","onDecrement","onIncrement","inputClassName"]),C=Object(n.useState)(j||c),y=Object(a.a)(C,2),I=y[0],P=y[1],D=function(){if(!O&&!u){if(!l&&I<=c)return;P(I-i<c?l?s:c:I-i),g&&N(I)}},U=function(){if(!O&&!u){if(!l&&I>=s)return;P(I+i>s?l?c:s:I+i),N&&N(I)}};return Object(n.useEffect)((function(){x&&x(I)}),[I]),Object(T.jsxs)(E.a,Object(_.a)(Object(_.a)({className:S()("number-input",(t={disabled:O,readonly:u},Object(k.a)(t,f,f),Object(k.a)(t,"vertical-number-input",p),Object(k.a)(t,"vertical-number-input-".concat(r),p&&r),t))},o?{style:o}:{}),{},{children:[Object(T.jsx)(F.a,{addonType:"prepend",onClick:D,children:Object(T.jsx)(h.a,Object(_.a)(Object(_.a)({className:"btn-icon",color:"transparent"},r?{size:r}:{}),{},{disabled:!l&&I<=c||O||u,children:m}))}),Object(T.jsx)(b.a,Object(_.a)(Object(_.a)({},w),{},{type:"number",value:I,disabled:O,readOnly:u,onKeyDown:function(e){u||(38===e.keyCode&&U(),40===e.keyCode&&D())},onChange:function(e){var t=Number(e.target.value);t>s?t=s:t<c&&(t=c),P(t)},className:S()(Object(k.a)({},v,v))},r?{bsSize:r}:{})),Object(T.jsx)(F.a,{addonType:"append",onClick:U,children:Object(T.jsx)(h.a,Object(_.a)(Object(_.a)({className:"btn-icon",color:"transparent"},r?{size:r}:{}),{},{disabled:!l&&I>=s||O||u,children:d}))})]}))},L=U;U.defaultProps={min:1,step:1,wrap:!1,max:1/0,disabled:!1,readonly:!1,downIcon:Object(T.jsx)(P.a,{size:14}),upIcon:Object(T.jsx)(D.a,{size:14})};var A=c(650),B=c(652),K=c(259),R=c.n(K),J=c(632),M=function(e){return Object(T.jsxs)(J.a,{className:"table-hover-animation",bordered:!0,responsive:!0,children:[Object(T.jsx)("thead",{children:Object(T.jsxs)("tr",{children:[Object(T.jsx)("th",{scope:"col",className:"text-nowrap",children:"#id"}),Object(T.jsx)("th",{scope:"col",className:"text-nowrap",children:"\u0424\u0418\u041e"}),Object(T.jsx)("th",{scope:"col",className:"text-nowrap",children:"\u0413\u043e\u0440\u043e\u0434"}),Object(T.jsx)("th",{scope:"col",className:"text-nowrap",children:"\u0428\u043a\u043e\u043b\u0430"}),Object(T.jsx)("th",{scope:"col",className:"text-nowrap",children:"\u0422\u0435\u043b\u0435\u0444\u043e\u043d"}),Object(T.jsx)("th",{scope:"col",className:"text-nowrap",children:"\u041f\u043e\u0447\u0442\u0430"}),Object(T.jsx)("th",{scope:"col",className:"text-nowrap",children:"\u0420\u0435\u0437\u0443\u043b\u044c\u0442\u0430\u0442"}),Object(T.jsx)("th",{scope:"col",className:"text-nowrap",children:"\u041a\u0440\u0435\u0430\u0442\u0438\u0432\u043d\u043e\u0435 \u0437\u0430\u0434\u0430\u043d\u0438\u0435"}),Object(T.jsx)("th",{scope:"col",className:"text-nowrap",children:"Action"})]})}),Object(T.jsx)("tbody",{children:e.usersData})]})},V=c(1063),q=c(554),G=c(555),H=c(556),Q=c(602),W=function(e){var t=e.title,c=e.children,s=e.noBody,i=e.code,r=e.iconCode,l=Object(n.useState)(!1),j=Object(a.a)(l,2),o=j[0],b=j[1],d=r||Object(T.jsx)(V.a,{size:15}),O=s?n.Fragment:u.a;return Object(T.jsxs)(q.a,{className:"card-snippet",children:[Object(T.jsxs)(G.a,{children:[Object(T.jsx)(H.a,{tag:"h4",children:t}),Object(T.jsx)("div",{className:"views cursor-pointer",onClick:function(){return b(!o)},children:d})]}),Object(T.jsx)(O,{children:c}),Object(T.jsx)(Q.a,{isOpen:o,children:Object(T.jsx)(u.a,{children:i})})]})},X=c(611),Y=c(1064),Z=c(1065),$=function(e){return Object(n.useEffect)((function(){R.a.highlightAll()})),Object(T.jsx)(n.Fragment,{children:Object(T.jsx)(r.a,{children:Object(T.jsx)(l.a,{sm:"12",children:Object(T.jsxs)(W,{title:"\u0412\u0441\u0435 \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u0438",noBody:!0,children:[Object(T.jsx)(u.a,{children:Object(T.jsx)(X.a,{type:"border",data:e.filterData})}),Object(T.jsx)(M,{usersData:e.usersData}),e.usersData.length>0&&Object(T.jsx)(A.a,{children:Object(T.jsxs)(B.a,{className:"d-flex justify-content-center mt-3",children:[e.currentPagination>1&&Object(T.jsxs)(T.Fragment,{children:[Object(T.jsx)(s.a,{children:Object(T.jsx)(i.a,{onClick:function(){return e.changePagination(1)},first:!0,children:"\u041d\u0430\u0447\u0430\u043b\u043e"})}),Object(T.jsx)(s.a,{children:Object(T.jsx)(i.a,{onClick:function(){return e.changePagination(e.currentPagination-1)},first:!0,children:Object(T.jsx)(Y.a,{size:15})})})]}),e.paginations,e.currentPagination!==e.paginationCnt&&Object(T.jsxs)(T.Fragment,{children:[Object(T.jsx)(s.a,{children:Object(T.jsx)(i.a,{onClick:function(){return e.changePagination(e.currentPagination+1)},last:!0,children:Object(T.jsx)(Z.a,{size:15})})}),Object(T.jsx)(s.a,{children:Object(T.jsx)(i.a,{onClick:function(){return e.changePagination(e.paginationCnt)},first:!0,children:"\u041a\u043e\u043d\u0435\u0446"})})]})]})})]})})})})},ee=c(117),te=c(126),ce=c(517),ae=c(124),ne=c(120);t.default=Object(ee.b)((function(e){return{users:e.usersList.users,cnt:e.usersList.cnt,limitTo:e.usersList.limitTo}}),{getUsers:te.e,deleteUser:te.b,createExcel:ae.a})((function(e){for(var t=function(){return Object(T.jsxs)(n.Fragment,{children:[Object(T.jsx)("span",{className:"switch-icon-left",children:Object(T.jsx)(N.a,{size:14})}),Object(T.jsx)("span",{className:"switch-icon-right",children:Object(T.jsx)(v.a,{size:14})})]})},c=Object(n.useState)(""),_=Object(a.a)(c,2),k=_[0],z=_[1],I=Object(n.useState)(""),S=Object(a.a)(I,2),P=S[0],D=S[1],E=Object(n.useState)(""),F=Object(a.a)(E,2),U=F[0],A=F[1],B=Object(n.useState)(0),K=Object(a.a)(B,2),R=K[0],J=K[1],M=Object(n.useState)(100),V=Object(a.a)(M,2),q=V[0],G=V[1],H=Object(n.useState)(0),Q=Object(a.a)(H,2),W=Q[0],X=Q[1],Y=Object(n.useState)(0),Z=Object(a.a)(Y,2),ee=Z[0],te=Z[1],ae=Object(n.useState)(1),se=Object(a.a)(ae,2),ie=se[0],re=se[1],le=function(e){switch(e){case"email":return X(0===W?1:0);case"creative":return te(0===ee?1:0)}},je=e.limitTo,oe=0,be=e.cnt,de=Math.ceil(be/je),Oe=[],ue=ie+3>de?de:ie+3,he=function(){e.getUsers({fullName:k,city:P,school:U,isEmail:W,isCreative:ee,percentBefore:R,percentAfter:q,limitOf:oe,limitTo:je})},xe=function(e){oe=e*je-je,he(),re(e)},me=function(e){Oe.push(Object(T.jsx)(s.a,{onClick:function(){return xe(e)},active:e===ie,children:Object(T.jsx)(i.a,{children:e})},e))},pe=ie-2<1?1:ie-2;pe<=ue;pe++)me(pe);Object(n.useEffect)((function(){he()}),[]);var fe=[{title:"\u041f\u043e\u0438\u0441\u043a \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u0435\u0439",content:Object(T.jsxs)(T.Fragment,{children:[Object(T.jsxs)(r.a,{children:[Object(T.jsx)(l.a,{className:"mb-1",xl:"4",md:"6",sm:"12",children:Object(T.jsxs)(j.a,{children:[Object(T.jsx)(o.a,{for:"basicInput",children:"\u0424\u0418\u041e"}),Object(T.jsx)(b.a,{type:"text",id:"basicInput",value:k,onChange:function(e){return z(e.target.value)},placeholder:"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0444\u0430\u043c\u0438\u043b\u0438\u044e, \u0438\u043c\u044f \u0438\u043b\u0438 \u043e\u0442\u0447\u0435\u0441\u0442\u0432\u043e"})]})}),Object(T.jsx)(l.a,{className:"mb-1",xl:"4",md:"6",sm:"12",children:Object(T.jsxs)(j.a,{children:[Object(T.jsx)(o.a,{for:"basicInput",children:"\u0413\u043e\u0440\u043e\u0434"}),Object(T.jsx)(b.a,{type:"text",id:"basicInput",placeholder:"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0433\u043e\u0440\u043e\u0434",value:P,onChange:function(e){return D(e.target.value)}})]})}),Object(T.jsx)(l.a,{className:"mb-1",xl:"4",md:"6",sm:"12",children:Object(T.jsxs)(j.a,{children:[Object(T.jsx)(o.a,{for:"basicInput",children:"\u0423\u0447\u0435\u0431\u043d\u043e\u0435 \u0437\u0430\u0432\u0435\u0434\u0435\u043d\u0438\u0435"}),Object(T.jsx)(b.a,{type:"text",id:"basicInput",placeholder:"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0448\u043a\u043e\u043b\u0443",value:U,onChange:function(e){return A(e.target.value)}})]})}),Object(T.jsx)(l.a,{xl:"2",md:"3",sm:"12",children:Object(T.jsxs)(j.a,{children:[Object(T.jsx)(d.a,{className:"mb-0",children:"E-mail"}),Object(T.jsx)(O.a,{type:"switch",label:Object(T.jsx)(t,{}),className:"custom-control-success",id:"isEmail",name:"isEmail",inline:!0,onChange:function(){return le("email")}})]})}),Object(T.jsx)(l.a,{xl:"2",md:"3",sm:"12",children:Object(T.jsxs)(j.a,{children:[Object(T.jsx)(d.a,{className:"mb-0",children:"\u041a\u0440\u0435\u0430\u0442\u0438\u0432\u043d\u043e\u0435 \u0437\u0430\u0434\u0430\u043d\u0438\u0435"}),Object(T.jsx)(O.a,{type:"switch",label:Object(T.jsx)(t,{}),className:"custom-control-success",id:"isCreative",name:"isCreative",inline:!0,onChange:function(){return le("creative")}})]})}),Object(T.jsx)(l.a,{xl:"4",md:"6",sm:"12",children:Object(T.jsxs)(u.a,{children:[Object(T.jsx)(d.a,{children:"\u041f\u0440\u043e\u0446\u0435\u043d\u0442\u044b"}),Object(T.jsx)("div",{className:"mt-2",children:Object(T.jsxs)(r.a,{children:[Object(T.jsxs)(l.a,{md:6,children:[Object(T.jsx)(o.a,{for:"basic-number-input",children:"\u041e\u0442"}),Object(T.jsx)(L,{min:0,max:100,id:"basic-number-input",value:R,onChange:function(e){return J(e)}})]}),Object(T.jsxs)(l.a,{md:6,children:[Object(T.jsx)(o.a,{for:"basic-number-input",children:"\u0414\u043e"}),Object(T.jsx)(L,{min:0,max:100,id:"basic-number-input",value:q,onChange:function(e){return G(e)}})]})]})})]})})]}),Object(T.jsx)(r.a,{children:Object(T.jsxs)(l.a,{xl:6,md:6,sm:12,children:[Object(T.jsx)(l.a,{xl:"6",md:"6",sm:"12",children:Object(T.jsx)(j.a,{children:Object(T.jsx)(h.a,{onClick:function(){return he()},color:"relief-primary",children:"\u041f\u043e\u0438\u0441\u043a"})})}),Object(T.jsx)(l.a,{xl:"6",md:"6",sm:"12",children:Object(T.jsx)(j.a,{children:Object(T.jsx)(h.a,{onClick:function(){return window.open("".concat(ne.a.SERVER_URI,"/stat/createexcel/"))},color:"relief-success",children:"\u0421\u043e\u0437\u0434\u0430\u0442\u044c \u0442\u0430\u0431\u043b\u0438\u0446\u0443"})})})]})})]})}],ge=e.users.map((function(t,c){return Object(T.jsxs)("tr",{children:[Object(T.jsx)("td",{className:"text-nowrap",children:t.user_id}),Object(T.jsx)("td",{className:"text-nowrap",children:Object(T.jsx)("strong",{children:Object(T.jsx)(ce.b,{to:"/user/view/".concat(t.user_id),children:t.user_name})})}),Object(T.jsx)("td",{className:"text-nowrap",children:t.user_city}),Object(T.jsx)("td",{className:"text-nowrap",children:t.user_school}),Object(T.jsx)("td",{className:"text-nowrap",children:t.user_phone}),Object(T.jsx)("td",{className:"text-nowrap",children:""!==t.user_email?t.user_email:Object(T.jsx)(x.a,{color:"light-danger",children:"\u041d\u0435 \u0443\u043a\u0430\u0437\u0430\u043d\u0430"})}),Object(T.jsx)("td",{className:"text-nowrap",children:t.user_percent?t.user_percent+"%":Object(T.jsx)(x.a,{color:"light-danger",children:"\u041d\u0435 \u043f\u0440\u043e\u0439\u0434\u0435\u043d"})}),Object(T.jsx)("td",{className:"text-nowrap",children:"1"===t.isUpload_doc?null===t.creative_result_comment?Object(T.jsx)(x.a,{color:"light-info",children:"\u041d\u0430 \u043f\u0440\u043e\u0432\u0435\u0440\u043a\u0435"}):Object(T.jsx)(x.a,{color:"light-info",children:"\u041f\u0440\u043e\u0432\u0435\u0440\u0435\u043d\u043e"}):t.user_percent<50?Object(T.jsx)(x.a,{color:"light-danger",children:"\u041d\u0435 \u0434\u043e\u043f\u0443\u0449\u0435\u043d"}):"\u041d\u0435 \u043e\u0442\u043f\u0440\u0430\u0432\u043b\u0435\u043d\u043e"}),Object(T.jsx)("td",{className:"text-nowrap",children:Object(T.jsxs)(m.a,{children:[Object(T.jsx)(p.a,{className:"icon-btn hide-arrow",color:"transparent",size:"sm",caret:!0,children:Object(T.jsx)(w.a,{size:15})}),Object(T.jsxs)(f.a,{right:!0,children:[Object(T.jsxs)(g.a,{tag:ce.b,to:"/user/view/".concat(t.user_id),children:[Object(T.jsx)(C.a,{className:"mr-50",size:15})," ",Object(T.jsx)("span",{className:"align-middle",children:"\u041f\u0440\u043e\u0441\u043c\u043e\u0442\u0440\u0435\u0442\u044c"})]}),Object(T.jsxs)(g.a,{onClick:function(c){return function(t,c,a){a.preventDefault(),e.deleteUser(t,c,he)}(t.user_id,t.user_login,c)},children:[Object(T.jsx)(y.a,{className:"mr-50",size:15})," ",Object(T.jsx)("span",{className:"align-middle",children:"\u0423\u0434\u0430\u043b\u0438\u0442\u044c"})]})]})]})})]},"".concat(c,"_tr"))}));return Object(T.jsx)($,{LabelSwitch:t,filterData:fe,onSubmit:he,usersData:ge,paginations:Oe,currentPagination:ie,paginationCnt:de,changePagination:xe})}))},611:function(e,t,c){"use strict";var a=c(1),n=c(62),s=c(48),i=c(25),r=c(0),l=c(34),j=c.n(l),o=c(849),b=c(554),d=c(555),O=c(556),u=c(602),h=c(560),x=c(11),m=function(e){var t,c=e.data,l=e.type,m=e.accordion,p=e.active,f=e.toggle,g=e.titleKey,N=e.contentKey,v=e.className,w=Object(r.useState)(m?p:Object(i.a)(p)),C=Object(s.a)(w,2),y=C[0],_=C[1],k=function(e){if(m)_(e===y?null:e);else{var t=y,c=t.indexOf(e);t.includes(e)?(t.splice(c,1),_(Object(i.a)(t))):(t.push(e),_(Object(i.a)(t)))}};return Object(x.jsx)("div",{className:j()("collapse-icon",(t={},Object(n.a)(t,v,v),Object(n.a)(t,"collapse-default",!l),Object(n.a)(t,"collapse-shadow","shadow"===l),Object(n.a)(t,"collapse-border","border"===l),Object(n.a)(t,"collapse-margin","margin"===l),t)),children:c.map((function(e,t){var c,s=g?e[g]:e.title,i=N?e[N]:e.content;return Object(x.jsxs)(b.a,{className:j()("app-collapse",(c={},Object(n.a)(c,e.className,e.className),Object(n.a)(c,"open",m?y===t:y.includes(t)&&"shadow"===l),c)),children:[Object(x.jsxs)(d.a,Object(a.a)(Object(a.a)({className:j()("align-items-center",{collapsed:m?y!==t:!y.includes(t)})},"hover"===f?{onMouseEnter:function(){return k(t)}}:{onClick:function(){return k(t)}}),{},{children:[Object(x.jsx)(O.a,{className:"collapse-title",children:s}),Object(x.jsx)(o.a,{size:14})]})),Object(x.jsx)(u.a,{isOpen:m?y===t:y.includes(t),children:Object(x.jsx)(h.a,{children:i})})]},t)}))})};t.a=m,m.defaultProps={active:[],toggle:"click"}}}]);
//# sourceMappingURL=16.40cfe6bc.chunk.js.map