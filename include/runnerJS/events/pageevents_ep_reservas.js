
Runner.pages.PageSettings.addPageEvent('ep_reservas',Runner.pages.constants.PAGE_IMPORT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){swal("Importante!","Los datos actuales serán eliminados y reemplazados por el nuevo documento importado","info");});