<?php

namespace ContainerFbWshpy;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder34607 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera61e4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb971a = [
        
    ];

    public function getConnection()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getConnection', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getMetadataFactory', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getExpressionBuilder', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'beginTransaction', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getCache', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getCache();
    }

    public function transactional($func)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'transactional', array('func' => $func), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->transactional($func);
    }

    public function commit()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'commit', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->commit();
    }

    public function rollback()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'rollback', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getClassMetadata', array('className' => $className), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'createQuery', array('dql' => $dql), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'createNamedQuery', array('name' => $name), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'createQueryBuilder', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'flush', array('entity' => $entity), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'clear', array('entityName' => $entityName), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->clear($entityName);
    }

    public function close()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'close', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->close();
    }

    public function persist($entity)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'persist', array('entity' => $entity), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'remove', array('entity' => $entity), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'refresh', array('entity' => $entity), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'detach', array('entity' => $entity), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'merge', array('entity' => $entity), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getRepository', array('entityName' => $entityName), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'contains', array('entity' => $entity), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getEventManager', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getConfiguration', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'isOpen', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getUnitOfWork', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getProxyFactory', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'initializeObject', array('obj' => $obj), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'getFilters', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'isFiltersStateClean', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'hasFilters', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return $this->valueHolder34607->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera61e4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder34607) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder34607 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder34607->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, '__get', ['name' => $name], $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        if (isset(self::$publicPropertiesb971a[$name])) {
            return $this->valueHolder34607->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34607;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder34607;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34607;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder34607;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, '__isset', array('name' => $name), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34607;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder34607;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, '__unset', array('name' => $name), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34607;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder34607;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, '__clone', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        $this->valueHolder34607 = clone $this->valueHolder34607;
    }

    public function __sleep()
    {
        $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, '__sleep', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;

        return array('valueHolder34607');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera61e4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera61e4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera61e4 && ($this->initializera61e4->__invoke($valueHolder34607, $this, 'initializeProxy', array(), $this->initializera61e4) || 1) && $this->valueHolder34607 = $valueHolder34607;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder34607;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder34607;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
