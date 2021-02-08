<?php
trait OTcore{

	function InstallCore()
	{
		if ($this->not_exist('usr')) {
			$this->ot_create('usr');
		}
		$tmparray= [];
		$tmparray['C0010M001']='Failing read content';
		$tmparray['C0010M002']='Failing create content';
		$tmparray['C0010M003']='Failing save content';
		$tmparray['C0010M004']='Missing container';
		$tmparray['C0010M005']='Mising system content,file system corrupted';
		$tmparray['C0010M006']="Access error";
		$tmparray['C0010M007']="Record exist";
		$tmparray['C0010M008']="Record don't exist";
		$tmparray['C0010M009']="Record not avaible";
		$tmparray['C0010M010']="Record not visible";
		$tmparray['C0010M011']="Not conected";
		$tmparray['C0010M012']="Not autorized";
		$tmparray['C0010M013']="Can't change id";
		$tmparray['C0010M014']="Unkwow cointeiner";
		$tmparray['C0010M015']="Featured just for pay vertion";
		$tmparray['C0010M016']="Wrong data suply";
		$tmparray['C0010M017']="Container exist";
		$tmparray['C0010M018']="Not valid value";
		$tmparray['C0010M019']="Feature not installed";
		$tmparray['C0010M020']="Feature installed";
		$tmparray['C0010M021']="Already connected";
		$tmparray['C0010M022']="Record not active";
		$tmparray['C0010M023']="Record not autorized";
		$tmparray['C0010M024']="Unkown status";
		$tmparray['C0010M025']="Not a valid status";
		$tmparray['C0010M026']="Not a valid data";
		$this->ot_write('error.json',$tmparray);
		$tmparray=[];
		$tmparray['usr']='usr';
		$this->ot_write('features.json',$tmparray);
		$tmparray=[];
		$int['Name']='User Feature';
		$int['limit']=1;$int['OnUse']=1;
		$tmparray['usr']=$int;
		$this->ot_write('container.json',
		$tmparray);$tmparray=[];
		$tmparray['error.json']='file';
		$tmparray['features.json']='file';
		$tmparray['container.json']='file';
		$this->ot_write('content.json',$tmparray);
		$this->ot_create('admin','usr');
		$tmparray=[];
		$tmparray['password']=MD5('OT2021Free');
		$tmparray['status']='active';
		$tmparray['nick']='Administrator';
		$tmparray['name']='System Administrator';
		$tmparray['crtusr']='system';
		$tmparray['crtdat']=$this->ot_now();
		$tmparray['owner']='system';
		$this->ot_write('/usr/admin/admin.json',$tmparray);
		$tmparray=[];
		$tmparray['nick']='Users';
		$tmparray['name']='User Feature';
		$tmparray['crtusr']='system';
		$tmparray['crtdat']=$this->ot_now();
		$tmparray['owner']='system';
		$this->ot_write('/usr/admin.json',$tmparray);
		$tmparray=[];
		$tmparray['main']=0;
		$tmparray['usr']=0;
		$this->ot_write('/usr/admin/features.json',$tmparray);
		$tmparray=[];
		$tmparray['admin.json']='file';
		$tmparray['features.json']='file';
		$this->ot_write('/usr/admin/content.json',$tmparray);
	}
}
?>