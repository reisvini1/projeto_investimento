<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class UserService {
    
    private $repository;
    private $validator;
    
    public function __construct(UserRepository $repository, UserValidator $validator) {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function store($data){
        try {

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $usuario = $this->repository->create($data);

            return [
                'success' => true,
                'message' => 'Usuário cadastrado com sucesso',
                'data' => $usuario
            ];

        } catch (\Exeception $e) {
            return [
                'success' => false,
                'message' => 'Erro de execução'
            ];
        }
    }

    public function update(){

    }
    
    public function delete(){

    }
}