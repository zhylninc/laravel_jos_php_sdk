<?php
class VcItemOldProductUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.oldProduct.update";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                    	                        	                   			private $applyId;
    	                                                            
	public function setApplyId($applyId){
		$this->applyId = $applyId;
         $this->apiParas["apply_id"] = $applyId;
	}

	public function getApplyId(){
	  return $this->applyId;
	}

                        	                                            		                                    	                   			private $wareId;
    	                                                            
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["ware_id"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $brandId;
    	                                                            
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $zhBrand;
    	                                                            
	public function setZhBrand($zhBrand){
		$this->zhBrand = $zhBrand;
         $this->apiParas["zh_brand"] = $zhBrand;
	}

	public function getZhBrand(){
	  return $this->zhBrand;
	}

                        	                   			private $enBrand;
    	                                                            
	public function setEnBrand($enBrand){
		$this->enBrand = $enBrand;
         $this->apiParas["en_brand"] = $enBrand;
	}

	public function getEnBrand(){
	  return $this->enBrand;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $webSite;
    	                                                            
	public function setWebSite($webSite){
		$this->webSite = $webSite;
         $this->apiParas["web_site"] = $webSite;
	}

	public function getWebSite(){
	  return $this->webSite;
	}

                        	                   			private $originalPlace;
    	                                                            
	public function setOriginalPlace($originalPlace){
		$this->originalPlace = $originalPlace;
         $this->apiParas["original_place"] = $originalPlace;
	}

	public function getOriginalPlace(){
	  return $this->originalPlace;
	}

                        	                   			private $warranty;
    	                        
	public function setWarranty($warranty){
		$this->warranty = $warranty;
         $this->apiParas["warranty"] = $warranty;
	}

	public function getWarranty(){
	  return $this->warranty;
	}

                        	                   			private $salerCode;
    	                                                            
	public function setSalerCode($salerCode){
		$this->salerCode = $salerCode;
         $this->apiParas["saler_code"] = $salerCode;
	}

	public function getSalerCode(){
	  return $this->salerCode;
	}

                        	                   			private $purchaserCode;
    	                                                            
	public function setPurchaserCode($purchaserCode){
		$this->purchaserCode = $purchaserCode;
         $this->apiParas["purchaser_code"] = $purchaserCode;
	}

	public function getPurchaserCode(){
	  return $this->purchaserCode;
	}

                        	                   			private $pkgInfo;
    	                                                            
	public function setPkgInfo($pkgInfo){
		$this->pkgInfo = $pkgInfo;
         $this->apiParas["pkg_info"] = $pkgInfo;
	}

	public function getPkgInfo(){
	  return $this->pkgInfo;
	}

                        	                   			private $itemNum;
    	                                                            
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["item_num"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $introHtml;
    	                                                            
	public function setIntroHtml($introHtml){
		$this->introHtml = $introHtml;
         $this->apiParas["intro_html"] = $introHtml;
	}

	public function getIntroHtml(){
	  return $this->introHtml;
	}

                        	                   			private $introMobile;
    	                                                            
	public function setIntroMobile($introMobile){
		$this->introMobile = $introMobile;
         $this->apiParas["intro_mobile"] = $introMobile;
	}

	public function getIntroMobile(){
	  return $this->introMobile;
	}

                        	                   			private $videoId;
    	                                                            
	public function setVideoId($videoId){
		$this->videoId = $videoId;
         $this->apiParas["video_id"] = $videoId;
	}

	public function getVideoId(){
	  return $this->videoId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $value;
                              public function setValue($value ){
                 $this->value=$value;
                 $this->apiParas["value"] = $value;
              }

              public function getValue(){
              	return $this->value;
              }
                                                                                                                                        	                   			private $batchNumbers;
    	                                                            
	public function setBatchNumbers($batchNumbers){
		$this->batchNumbers = $batchNumbers;
         $this->apiParas["batch_numbers"] = $batchNumbers;
	}

	public function getBatchNumbers(){
	  return $this->batchNumbers;
	}

                        	                   			private $hasTransferElecCode;
    	                                                                                    
	public function setHasTransferElecCode($hasTransferElecCode){
		$this->hasTransferElecCode = $hasTransferElecCode;
         $this->apiParas["has_transfer_elec_code"] = $hasTransferElecCode;
	}

	public function getHasTransferElecCode(){
	  return $this->hasTransferElecCode;
	}

                                                                        		                                    	                   			private $wreadme;
    	                        
	public function setWreadme($wreadme){
		$this->wreadme = $wreadme;
         $this->apiParas["wreadme"] = $wreadme;
	}

	public function getWreadme(){
	  return $this->wreadme;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $propId;
                              public function setPropId($propId ){
                 $this->propId=$propId;
                 $this->apiParas["prop_id"] = $propId;
              }

              public function getPropId(){
              	return $this->propId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propVid;
                              public function setPropVid($propVid ){
                 $this->propVid=$propVid;
                 $this->apiParas["prop_vid"] = $propVid;
              }

              public function getPropVid(){
              	return $this->propVid;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propRemark;
                              public function setPropRemark($propRemark ){
                 $this->propRemark=$propRemark;
                 $this->apiParas["prop_remark"] = $propRemark;
              }

              public function getPropRemark(){
              	return $this->propRemark;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propAlias;
                              public function setPropAlias($propAlias ){
                 $this->propAlias=$propAlias;
                 $this->apiParas["prop_alias"] = $propAlias;
              }

              public function getPropAlias(){
              	return $this->propAlias;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propValues;
                              public function setPropValues($propValues ){
                 $this->propValues=$propValues;
                 $this->apiParas["prop_values"] = $propValues;
              }

              public function getPropValues(){
              	return $this->propValues;
              }
                                                                                                                                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $extId;
                              public function setExtId($extId ){
                 $this->extId=$extId;
                 $this->apiParas["ext_id"] = $extId;
              }

              public function getExtId(){
              	return $this->extId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $extValues;
                              public function setExtValues($extValues ){
                 $this->extValues=$extValues;
                 $this->apiParas["ext_values"] = $extValues;
              }

              public function getExtValues(){
              	return $this->extValues;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $extAlias;
                              public function setExtAlias($extAlias ){
                 $this->extAlias=$extAlias;
                 $this->apiParas["ext_alias"] = $extAlias;
              }

              public function getExtAlias(){
              	return $this->extAlias;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $extRemark;
                              public function setExtRemark($extRemark ){
                 $this->extRemark=$extRemark;
                 $this->apiParas["ext_remark"] = $extRemark;
              }

              public function getExtRemark(){
              	return $this->extRemark;
              }
                                                                                                                }





        
 

