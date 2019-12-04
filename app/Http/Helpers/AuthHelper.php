<?php

use Illuminate\Support\Facades\DB;

    /**
     * @param string $stringArray
     * @param array $permissions
     *
     * @return boolean
     * */
     function has_permissions($permissions,$stringArray){
        $hasPermission = false;
        $permissionsArray = explode(',',$stringArray);

        if(count($permissionsArray) == 0){
            return false;
        }

        foreach ($permissionsArray as $permission){
            if(in_array($permission,$permissions)){
                $hasPermission = true;
            }
        }

        return $hasPermission;
    }


    /**
     * @param int $userId
     *
     *
     * @return string
     * */
    function getPortal($userId){
         $portal = DB::select("call getPortalByUser( $userId )");
         return $portal[0]->portal;
    }


    /**
     * Get Menu by user
     *
     * @param  int  $userId
     *
     * @return \Illuminate\Http\Response
     */
    function getMenu($userId)
    {
        $menus = [];
        $etapas = getStepsByUser($userId);
        foreach($etapas as $etapa){
            $menu=[];
            $menu['id']=$etapa->id_etapa;
            $menu['nombre']=$etapa->etapa;
            $menu['opciones']=array();
            $permisos = getPermissionStepByUser($userId,$etapa->id_etapa);
            foreach($permisos as $perm){
                $p=array();
                $p['id']=$perm->id_permisos;
                $p['nombre']=$perm->nombre;
                $p['url']=$perm->url;
                array_push($menu['opciones'],$p);
            }
            array_push($menus, $menu);
        }
        return Response($menus);
    }

    /**
     * Get Etapas by $userId
     *
     * @param  int $userId
     *
     * @return \Illuminate\Support\Collection
     */
    function getStepsByUser($userId){
        return DB::table('user_membership')
            ->distinct()
            ->join('role','role.id','=','user_membership.roleId')
            ->join('ppl_rol_permisos','ppl_rol_permisos.id_rol','=','role.id')
            ->join('ppl_permisos','ppl_permisos.id_permisos','=','ppl_rol_permisos.id_permiso')
            ->where('user_membership.userId',$userId)
            ->whereNotIn('id_etapa',[1100,1500])
            ->groupBy('etapa')
            ->orderBy('etapa', 'asc')
            ->orderBy('nombre', 'asc')
            ->get();
    }

    /**
     * Get Permiso by $userId and $etapaId
     *
     * @param  int  $userId
     * @param  int  $etapaId
     *
     * @return \Illuminate\Support\Collection
     */
    function getPermissionStepByUser($userId,$etapaId){
        return DB::table('user_membership')
            ->join('role','role.id','=','user_membership.roleId')
            ->join('ppl_rol_permisos','ppl_rol_permisos.id_rol','=','role.id')
            ->join('ppl_permisos','ppl_permisos.id_permisos','=','ppl_rol_permisos.id_permiso')
            ->where('user_membership.userId',$userId)
            ->where('ppl_permisos.id_etapa',$etapaId)
            ->whereNotIn('id_etapa',[1500])
            ->orderBy('etapa', 'asc')
            ->orderBy('nombre', 'asc')
            ->get();
    }

    /**
     * Get Permisos by $userId
     *
     * @param  int  $userId
     *
     * @return \Illuminate\Http\Response
     */
    function getArrayPermissionsByUser($userId){
        $pplPermissions = DB::table('user_membership')
            ->join('role','role.id','=','user_membership.roleId')
            ->join('ppl_rol_permisos','ppl_rol_permisos.id_rol','=','role.id')
            ->join('ppl_permisos','ppl_permisos.id_permisos','=','ppl_rol_permisos.id_permiso')
            ->where('user_membership.userId',$userId)
            ->whereNotIn('id_etapa',[1500])
            ->orderBy('etapa', 'asc')
            ->orderBy('nombre', 'asc')
            ->get();

        $permissions = [];
        foreach ($pplPermissions as $permission){
            $permissions[] = $permission->privilegio;
        }

        return Response($permissions);
    }

    function getUrlFromStep($stepId){
        $url = "";
        if($stepId == 200){$url = "/Pipeline/ideas";}
        elseif ($stepId == 300){$url = "/Pipeline/innovation/commercialapproval";}
        elseif ($stepId == 400){$url = "/Pipeline/innovation/validationprocess";}
        elseif ($stepId == 500){$url = "/Pipeline/innovation/validationprocess";}
        elseif ($stepId == 600){$url = "/Pipeline/innovation/validationprocess";}
        elseif ($stepId == 700){$url = "/Pipeline/innovation/validationprocess";}
        elseif ($stepId == 800){$url = "/Pipeline/innovation/validationprocess";}
        elseif ($stepId == 900){$url = "/Pipeline/innovation/validationprocess";}
        elseif ($stepId == 1000){$url = "/Pipeline/innovation/validationprocess";}
        elseif ($stepId == 1100){$url = "/Pipeline/innovation/validationprocess";}
        elseif ($stepId == 1200){$url = "/Pipeline/innovation/readytomarket";}
        elseif ($stepId == 1400){$url = "/Pipeline/suppliers";}
        elseif ($stepId == 1600){$url = "/Pipeline/reports/general";}
        return $url;
    }

    function getBackgroundClassFromStep($stepId){
        $class = "";
        if($stepId == 200){$class = "second-nav-one";}
        elseif ($stepId == 300){$class = "second-nav-two";}
        elseif ($stepId == 400){$class = "second-nav-three";}
        elseif ($stepId == 500){$class = "second-nav-three";}
        elseif ($stepId == 600){$class = "second-nav-three";}
        elseif ($stepId == 700){$class = "second-nav-three";}
        elseif ($stepId == 800){$class = "second-nav-three";}
        elseif ($stepId == 900){$class = "second-nav-three";}
        elseif ($stepId == 1000){$class = "second-nav-three";}
        elseif ($stepId == 1100){$class = "second-nav-three";}
        elseif ($stepId == 1200){$class = "second-nav-four";}
        elseif ($stepId == 1400){$class = "second-nav-four";}
        elseif ($stepId == 1600){$class = "second-nav-five";}
        return $class;
    }

    function getIconClassFromStep($stepId){
        $class = "";
        if($stepId == 200){$class = "fa-lightbulb-o";}
        elseif ($stepId == 300){$class = "fa-gear";}
        elseif ($stepId == 400){$class = "fa-exchange";}
        elseif ($stepId == 500){$class = "fa-exchange";}
        elseif ($stepId == 600){$class = "fa-exchange";}
        elseif ($stepId == 700){$class = "fa-exchange";}
        elseif ($stepId == 800){$class = "fa-exchange";}
        elseif ($stepId == 900){$class = "fa-exchange";}
        elseif ($stepId == 1000){$class = "fa-exchange";}
        elseif ($stepId == 1100){$class = "fa-exchange";}
        elseif ($stepId == 1200){$class = "fa-check";}
        elseif ($stepId == 1400){$class = "fa-check";}
        elseif ($stepId == 1600){$class = "fa-file-text";}
        return $class;
    }

    function hasStepByUser($userId,$steps){
        $hasPermission = false;
        $stepsUser = getStepsByUser($userId);
        $stepsArray = [];
        foreach ($stepsUser as $step){
            $stepsArray[] = $step->id_etapa;
        }
        $permissionsArray = explode(',',$steps);


        if(count($permissionsArray) == 0){
            return false;
        }

        foreach ($stepsArray as $permission){
            if(in_array($permission,$permissionsArray)){
                $hasPermission = true;
            }
        }

        return $hasPermission;


    }
