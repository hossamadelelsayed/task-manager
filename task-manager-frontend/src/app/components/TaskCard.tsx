type TaskCardProps = {
    title: string;
    description: string;
    status: string;
  };
  
  const TaskCard = ({ title, description, status }: TaskCardProps) => {
    return (
      <li className="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-200 ease-in-out p-6 flex flex-col justify-between border border-gray-200">
        <div>
          <h2 className="text-2xl font-semibold text-gray-800 mb-4">{title}</h2>
          <p className="text-gray-600 text-sm mb-6">{description}</p>
        </div>
        <div className="flex justify-end">
          <span
            className={`px-4 py-2 text-sm font-bold uppercase rounded-lg ${
              status === 'Completed'
                ? 'bg-gradient-to-r from-green-400 to-green-600 text-white'
                : 'bg-gradient-to-r from-yellow-400 to-yellow-600 text-white'
            }`}
          >
            {status}
          </span>
        </div>
      </li>
    );
  };
  
  export default TaskCard;
  